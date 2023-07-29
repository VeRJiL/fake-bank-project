<?php

namespace Infrastructure\SMS;

interface SMSInterface
{
    public function sendSMS(string $phoneNumber, string $body);
}
