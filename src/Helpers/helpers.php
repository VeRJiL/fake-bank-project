<?php

use Helpers\BaseAnswer;
use Helpers\FlashMessage;
use Illuminate\Http\JsonResponse;
use Morilog\Jalali\CalendarUtils;

function generateUuid() {
	if (function_exists('com_create_guid') === true) {
		return trim(com_create_guid(), '{}');
	}
	
	$data = openssl_random_pseudo_bytes(16);
	$data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
	$data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
	return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}


function convertGregorianToJalali($date = null)
{
	if (!$date) {
		return null;
	}
	
	return CalendarUtils::strftime('Y-m-d', strtotime($date));
}

/**
 * @param bool $singleTon
 * @return BaseAnswer
 */
function baseAnswer(bool $singleTon = false): BaseAnswer
{
    if ($singleTon) {
        return BaseAnswer::getInstance();
    }

    return new BaseAnswer();
}

/**
 * @param null $message
 * @param string|int $time
 * @return FlashMessage
 */
function flash($message = null, string|int $time = '3'): FlashMessage
{
    $flashMessage = new FlashMessage();

    if (isset($message)) {
        $flashMessage->setTime($time)->success($message);
    }

    return $flashMessage;
}

function successAnswer($data = null, $message = '', $errors = null): BaseAnswer
{
    $baseAnswer = baseAnswer()
        ->setData($data)
        ->setMessage($message)
        ->setSuccess(true);

    if ($errors) {
        $baseAnswer->setErrors($errors);
    }

    return $baseAnswer;
}

function failAnswer($data = null, $message = '', $errors = null): BaseAnswer
{
    $baseAnswer = baseAnswer()
        ->setData($data)
        ->setMessage($message)
        ->setSuccess(false);

    if ($errors) {
        $baseAnswer->setErrors($errors);
    }

    return $baseAnswer;
}

/**
 * @param BaseAnswer $result
 * @param $statusCode
 * @param null $collection
 * @return JsonResponse
 */
function successResponse(BaseAnswer $result, $statusCode, $collection = null): JsonResponse
{
    $baseAnswer = baseAnswer()
        ->setSuccess(true)
        ->setMessage($result->getMessages())
        ->setErrors($result->getErrors());

    if ($collection) {
        $baseAnswer->setData(new $collection($result->getData()));
    } else {
        $baseAnswer->setData($result->getData());
    }

    return response()->json(
        $baseAnswer->toArray(),
        $statusCode
    );
}

/**
 * @param BaseAnswer $baseAnswer
 * @param $statusCode
 * @return JsonResponse
 */
function failResponse(BaseAnswer $baseAnswer, $statusCode): JsonResponse
{
    return response()->json(
        baseAnswer()
            ->setSuccess(false)
            ->setData($baseAnswer->getData())
            ->setMessage($baseAnswer->getMessages())
            ->setErrors($baseAnswer->getErrors())
            ->setStatusCode($baseAnswer->getStatusCode())
            ->setExceptionType($baseAnswer->getExceptionType())
            ->toArray(),
        $statusCode
    );
}

function toPersianNum($number)
{
    $number = str_replace("1", "۱", $number);
    $number = str_replace("2", "۲", $number);
    $number = str_replace("3", "۳", $number);
    $number = str_replace("4", "۴", $number);
    $number = str_replace("5", "۵", $number);
    $number = str_replace("6", "۶", $number);
    $number = str_replace("7", "۷", $number);
    $number = str_replace("8", "۸", $number);
    $number = str_replace("9", "۹", $number);
    $number = str_replace("0", "۰", $number);
    return $number;
}

function findMessage(string $key, string $item = ''): string
{
    return trans('messages.' . $key, ['item' => __($item)]);
}

function slugify(string $string, $separator = '-'): string
{
    if (is_null($string)) {
        return "";
    }

    // Remove spaces from the beginning and from the end of the string
    $string = trim($string);

    // Lower case everything
    // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: https://www.php.net/manual/en/function.mb-strtolower.php
    $string = mb_strtolower($string, "UTF-8");

    // Make alphanumeric (removes all other characters)
    // this makes the string safe especially when used as a part of a URL
    // this keeps latin characters and arabic charactrs as well
    $string = preg_replace("/[^a-z0-9_\s\-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);

    return rawurldecode($string);
}
