<?php

namespace Helpers;

use Plank\Mediable\Media;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\HandlesMediaUploadExceptions;
use Plank\Mediable\Exceptions\MediaUpload\FileSizeException;
use Plank\Mediable\Exceptions\MediaUpload\ForbiddenException;
use Plank\Mediable\Exceptions\MediaUpload\FileExistsException;
use Plank\Mediable\Exceptions\MediaUpload\FileNotFoundException;
use Plank\Mediable\Exceptions\MediaUpload\ConfigurationException;
use Plank\Mediable\Exceptions\MediaUpload\FileNotSupportedException;

class FileManager
{
    use HandlesMediaUploadExceptions;

    /**
     * The Requested File ...
     */
    private $file;

    /**
     * the type of the model. it can be Service or Employee or any model.
     */
    private Model $model;

    /**
     * the mode of the upload system, which can be edit or create.
     *
     * "edit" means that user is editing the existing resource
     * "create" means user is creating a new resource
     */
    private string $mode;

    /**
     * Tag which file will be saved in the database, we can get our media using this tag
     */
    private string $tag;

    /**
     * destination directory which file will be saved
     */
    private string $directory;

    private $resultData = [];

    /**
     * the disk of the laravel file-system
     */
    private string $disk;

    /**
     * Uploads Media.
     *
     * @param object $model
     * @param string $path
     * @param string $tag
     * @param string $mode
     * @param string $directory
     * @return void
     * @throws ConfigurationException
     * @throws FileExistsException
     * @throws FileNotFoundException
     * @throws FileNotSupportedException
     * @throws FileSizeException
     * @throws ForbiddenException
     */
    public function syncMedia($model, $path, $tag = 'file', $mode = 'create', $directory = 'uploads'): void
    {
        //TODO this should return base answer
        if (is_array($path)) {
            if ($mode == 'edit') {
                foreach ($model->getMedia($tag) as $media) {
                    $model->detachMedia($media);
                }
            }

            foreach ($path as $filePath) {
                if ($filePath != null) {
                    $media = MediaUploader::fromSource($filePath)
                        ->toDestination('public', $directory)
                        ->onDuplicateIncrement()
                        ->upload();

                    $model->attachMedia($media, [$tag]);
                }
            }
        } elseif (is_string($path)) {
            $media = MediaUploader::fromSource($path)
                ->toDestination('public', $directory)
                ->onDuplicateIncrement()
                ->upload();

            if ($mode == 'edit') {
                $model->syncMedia($media, [$tag]);
            } else {
                $model->attachMedia($media, [$tag]);
            }
        } else {
            $model->detachMediaTags([$tag]);
        }
    }

    /**
     * the main process of uploading files using Mediable
     *
     * @return BaseAnswer
     */
    public function uploadFiles(): BaseAnswer
    {
        $baseAnswer = baseAnswer();

        try {
            if (is_array($this->file)) {
                $this->uploadMass();
            } else {
                $this->uploadSingle();
            }

            $baseAnswer->setData($this->resultData);
            $baseAnswer->setMessage('Successfully uploaded');
            $baseAnswer->setSuccess(true);
        } catch (ForbiddenException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        } catch (FileSizeException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        } catch (FileNotSupportedException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        } catch (FileNotFoundException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        } catch (FileExistsException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        } catch (ConfigurationException $exception) {
            $baseAnswer->setMessage($this->transformMediaUploadException($exception));
            $baseAnswer->setSuccess(false);
        }
        return $baseAnswer;
    }

    /**
     * Uploads bunch of files
     * @return array
     * @throws ConfigurationException
     * @throws FileExistsException
     * @throws FileNotFoundException
     * @throws FileNotSupportedException
     * @throws FileSizeException
     * @throws ForbiddenException
     */
    private function uploadMass(): array
    {
        $mediaIds = [];

        foreach ($this->file as $gallery) {
            $media = MediaUploader::fromSource($gallery)
                ->toDestination('public', $this->directory)
                ->onDuplicateIncrement()
                ->setMaximumSize(999999999)
                ->upload();

            $mediaIds[] = $media->id;

            $this->resultData[] = $media;
        }

        if ($this->mode === 'edit') {
            $this->model->syncMedia($mediaIds, $this->tag);
        }

        if ($this->mode === 'create') {
            $this->model->attachMedia($mediaIds, $this->tag);
        }

        return $this->resultData;
    }

    /**
     * Uploads a single file.
     * @return Media
     * @throws ConfigurationException
     * @throws FileExistsException
     * @throws FileNotFoundException
     * @throws FileNotSupportedException
     * @throws FileSizeException
     * @throws ForbiddenException
     */
    private function uploadSingle(): Media
    {
        $media = MediaUploader::fromSource($this->file);
        $media->toDestination('public', $this->directory);
        $media->onDuplicateIncrement();
        $media->setMaximumSize(999999999);
        $media = $media->upload();

        if ($this->mode === 'edit') {
            return $this->model->syncMedia($media, $this->tag);
        }

        if ($this->mode === 'create') {
            $this->model->attachMedia($media, $this->tag);
        }

        return $this->resultData = $media;
    }

    /**
     * Accepts the model which has created or updated.
     * @example $model = $modelObject->create($request->all()); | $model->update($request->all());
     * @param Model $model
     * @return $this
     */
    public function setModel(Model $model): static
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Accepts a string which defines if the process is Creating a new model or edit an existing.
     *
     * @example 'create' | 'edit'
     * @param string $mode
     * @return $this
     */
    public function setMode(string $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Accepts the tag for the file. This is tag is important because if you want to retrieve
     * the file from the model relation you need the tag. $model->firstMedia('tagName');
     *
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag): static
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Accepts and sets the directory name in the defined disk.
     *
     * @param string $directory
     * @return $this
     */
    public function setDirectory(string $directory): static
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Sets the file which is filled with the request that users submitted.
     *
     * @param $file
     * @return $this
     */
    public function setFile($file): static
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Accepts a string as the disk name for storing data into the file-system
     *
     * @param string $disk
     */
    public function setDisk(string $disk): void
    {
        $this->disk = $disk;
    }
}
