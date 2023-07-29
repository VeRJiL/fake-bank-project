<?php

namespace Helpers;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Builder;

abstract class Service
{
    protected string $storeSuccessMessage;
    protected string $updateSuccessMessage;
    protected string $deleteSuccessMessage;
    protected string $updateFailMessage;
    protected string $deleteFailMessage;
    protected string $storeFailMessage;
    protected string $notFoundMessage;
    protected Client $httpClient;
    protected Model $model;

    public function __construct()
    {
        $this->httpClient = new Client();
        $this->loadMessages();
    }

    /**
     * Gets all the resources in a paginated manner.
     * @param null $other
     * @return BaseAnswer
     */
    public function getPaginated($other = null): BaseAnswer
    {
        return successAnswer(
            $this->model
                ->latest()
                ->paginate(10)
        );
    }

    /**
     * Gets all the vehicle types.
     * @param null $parent
     * @return BaseAnswer
     */
    public function getAll($parent = null): BaseAnswer
    {
        return successAnswer(
            $this->model
                ->latest()
                ->get()
        );
    }

    /**
     * Stores the entity and returns the persisted entity and sets flash message and logs.
     * There is null in the data if process fails.
     * @param array $request
     * @param null $other
     * @return BaseAnswer
     */
    public function store(array $request, $other = null): BaseAnswer
    {
        $model = $this->model->create($request);

        if (is_callable($other)) {
            $other();
        }

        return $this->successStatus($model, $this->storeSuccessMessage);
    }

    /**
     * Find the requested entity by id and returns the entity and sets flash message and log.
     * There is null in the data if the entity has not found.
     * @param string $modelId
     * @param string $column
     * @param array $with
     * @return BaseAnswer
     */
    public function find(string $modelId, $column = "id", $with = []): BaseAnswer
    {
        $model = $this->model
            ->when($with, function ($query, $with) {
                return $query->with($with);
            })
            ->where($column, $modelId)
            ->firstOrFail();

        return successAnswer($model, '');
    }

    /**
     * Updates the requested entity and returns the updated entity and sets flash message and log.
     * There is null in the data if updating process fails.
     * @param array $request
     * @param Model $model
     * @param null $callable
     * @return BaseAnswer
     */
    public function update(array $request, Model $model, $callable = null): BaseAnswer
    {
        try {
            $model->update($request);

            if ($callable && is_callable($callable)) {
                $callable();
            }

            return $this->successStatus($model, $this->updateSuccessMessage);
        } catch (Exception $exception) {
            return $this->failStatus($exception, $this->updateFailMessage);
        }
    }

    /**
     * Deletes the requested entity from the table and returns the status and sets flash message and log.
     * the success or failed attempt.
     * @param Model $model
     * @return BaseAnswer
     */
    public function destroy(Model $model): BaseAnswer
    {
        try {
            $model->delete();
            return $this->successStatus($model, $this->deleteSuccessMessage);
        } catch (Exception $exception) {
            return $this->failStatus($exception, $this->deleteFailMessage);
        }
    }

    /**
     * Searches a specific resource for the given name and returns a paginated collection of data.
     * There is an empty array in case there is no such data in the table.
     * @param array $request
     * @param string $column
     * @return BaseAnswer
     */
    public function search(array $request, $column = 'name'): BaseAnswer
    {
        return successAnswer(
            $this->model
                ->where($column, 'like', '%' . $request['searchedText'] . '%')
                ->paginate(paginationSize()),
        );
    }

    /**
     * Sends a get http request to the requested url
     * @param $url
     * @param string $method
     * @param array $data
     * @param array $headers
     * @return BaseAnswer
     */
    protected function sendRequest($url, $method = 'GET', $data = [], $headers = []): BaseAnswer
    {
        try {
            $result = $this->httpClient->request(
                $method,
                $url,
                [
                    'headers' => $headers,
                    'form_params' => $data,
                    'timeout' => 30,
                ]
            );
            $body = json_decode($result->getBody()->getContents());

            if (!baseAnswer()->checkFormat($body)) {
                return failAnswer(
                    null,
                    'سیستم اطلاعات مرکزی کار نمیکند.',
                    'سیستم اطلاعات مرکزی کار نمیکند.'
                );
            }

            if (!$body->success) {
                return failAnswer($body->data, $body->messages, $body->errors);
            }

            return successAnswer($body->data, $body->messages ?? null);
        } catch (GuzzleException $exception) {
            return failAnswer(
                null,
                'سیستم اطلاعات مرکزی در دسترس نیست.',
                'سیستم اطلاعات مرکزی در دسترس نیست.'
            );
        }
    }

    protected function findMessage(string $key, string $item = ''): string
    {
        return trans('messages.' . $key, ['item' => __($item)]);
    }

    /**
     * Generates a BaseAnswer with true status and sets it's data to the
     * created resource and also sets a flash message for web purpose
     * and sets a LOG INFO type message in order to track resource.
     * @param $data
     * @param string $successMessage
     * @param bool $shouldLog
     * @return BaseAnswer
     */
    protected function successStatus($data, string $successMessage = '', $shouldLog = true): BaseAnswer
    {
        $baseAnswer = baseAnswer()->setSuccess(true);
        if ($shouldLog) {
            logger()->info($successMessage, ['id' => $data->id ? $data->id : null]);
        }

        if ($successMessage !== '') {
            $baseAnswer->setMessage($successMessage);
            flash($successMessage);
        }

        return $baseAnswer->setData($data);
    }

    /**
     * Generates a BaseAnswer with false status and sets it's data to the
     * updated resource and also sets a flash message for web purpose
     * and sets a LOG INFO type message in order to track resource.
     * @param $exception
     * @param string $failMessage
     * @param bool $shouldLog
     * @return BaseAnswer
     */
    protected function failStatus($exception = null, string $failMessage = '', $shouldLog = true): BaseAnswer
    {
        $baseAnswer = baseAnswer()->setSuccess(false)->setData(null);

        if ($shouldLog) {
            logger()->error($failMessage, [
                'exception' => $exception ? $exception->getMessage() : null,
                'code' => $exception ? $exception->getCode() : null,
            ]);
        }

        if ($failMessage !== '') {
            $baseAnswer->setMessage($failMessage);
            flash()->error($failMessage);
        }

        return $baseAnswer;
    }

    abstract public function entityName();

    protected function loadModel($model)
    {
        $this->model = $model;
    }

    public function loadMessages()
    {
        $this->storeFailMessage();
        $this->storeSuccessMessage();
        $this->updateFailMessage();
        $this->updateSuccessMessage();
        $this->deleteFailMessage();
        $this->deleteSuccessMessage();
        $this->notFoundMessage();
    }

    /**
     * @param Builder|Model $entity
     * @param array $data
     */
    protected function syncTags($entity, array $data)
    {
        if (isset($data['tags'])) {
            $entity->tags()->sync($data['tags']);
        }
    }

    public function storeSuccessMessage()
    {
        $this->storeSuccessMessage = findMessage('added', $this->entityName());
    }

    public function storeFailMessage()
    {
        $this->storeFailMessage = findMessage('store_failed', $this->entityName());
    }

    public function updateSuccessMessage()
    {
        $this->updateSuccessMessage = findMessage('updated', $this->entityName());
    }

    public function updateFailMessage()
    {
        $this->updateFailMessage = findMessage('update_failed', $this->entityName());
    }

    public function deleteSuccessMessage()
    {
        $this->deleteSuccessMessage = findMessage('deleted', $this->entityName());
    }

    public function deleteFailMessage()
    {
        $this->deleteFailMessage = findMessage('destroy_failed', $this->entityName());
    }

    public function notFoundMessage()
    {
        $this->notFoundMessage = findMessage('not_found', $this->entityName());
    }
}
