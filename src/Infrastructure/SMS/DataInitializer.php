<?php

namespace Infrastructure\SMS;

trait DataInitializer
{
    protected function findUser(): void
    {
        $this->username = config('sms.' . $this->driver . '.username');
    }

    protected function findPassword(): void
    {
        $this->password = config('sms.' . $this->driver . '.password');
    }

    protected function findHomeNumber(): void
    {
        $this->homeNumber = config('sms.' . $this->driver . '.homeNumber');
    }

    protected function findUrl(): void
    {
        $this->urlWithPattern = config('sms.' . $this->driver . '.urlWithPattern');
    }
}
