<?php

namespace Infrastructure\SMS\Drivers;

use GuzzleHttp\Client;

abstract class SMSDriver
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client();

        $this->initialData();
    }

    abstract public function initialData();
}
