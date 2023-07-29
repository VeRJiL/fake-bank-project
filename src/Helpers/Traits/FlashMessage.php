<?php

namespace Helpers\Traits;

trait FlashMessage
{
    protected function flashInfo($message, $time = 3): void
    {
        flash()->setTime($time)->info($message);
    }

    protected function flashSuccess($message, $time = 3): void
    {
        flash()->setTime($time)->success($message);
    }

    protected function flashError($message, $time = 3): void
    {
        flash()->setTime($time)->error($message);
    }

    protected function flashWarning($message, $time = 3): void
    {
        flash()->setTime($time)->warning($message);
    }
}
