<?php

namespace Infrastructure\SMS;

class SMS
{
    private SMSInterface $driver;
    private bool $shouldBeMocked;

    public function __construct()
    {
        $this->findDriver();
        $this->resolveMockable();
    }

    private function resolveMockable(): void
    {
        $this->shouldBeMocked = config('sms.should_be_mocked', false);
    }

    private function findDriver(): void
    {
        $driver = config('sms.default');
        $class = config('sms.drivers.' . $driver . '.class');

        $this->driver = new $class;
    }

    /**
     * Sends SMS to the given phone number with validation code which is
     * passed as the $param argument.
     *
     * @param string $phoneNumber
     * @param string $body
     */
    public function send(string $phoneNumber, string $body): void
    {
        if ($this->shouldBeMocked) {
            logger()->info('SMS has mocked and this is for test purpose', [
                'phoneNumber' => $phoneNumber
            ]);
        } else {
            $this->driver->sendSMS($phoneNumber, $body);
        }
    }
}
