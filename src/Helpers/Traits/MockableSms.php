<?php

namespace Helpers\Traits;

trait MockableSms
{
    protected function shouldSmsBeMocked(): string
    {
        return config('sms.should_be_mocked');
    }
}
