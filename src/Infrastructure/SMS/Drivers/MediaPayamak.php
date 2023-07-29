<?php

namespace Infrastructure\SMS\Drivers;

use Exception;
use SoapClient;
use Helpers\BaseAnswer;
use Infrastructure\SMS\SMSInterface;

class MediaPayamak extends SMSDriver implements SMSInterface
{
    private array $params = [];

    private string $fromNumber;
    private string $username;
    private string $password;
    private bool $isFlash;
    private string $url;

    public function sendSMS(string $phoneNumber, string $body): BaseAnswer
    {
        try {
            $this->params['messageContent'] = $body;
            $this->params['toNumbers'] = $phoneNumber;
            ini_set("soap.wsdl_cache_enabled", "0");
            $soapClient = new SoapClient($this->url, ['encoding' => 'UTF-8']);

            return successAnswer(
                $soapClient->SendSMS($this->params)->SendSMSResult
            );

        } catch (Exception $exception) {

            logger()->error('Caught exception: ' .  $exception->getMessage() . "\n");
            return failAnswer(
                null,
                'Caught exception: ' .  $exception->getMessage() . "\n",
                'Caught exception: ' .  $exception->getMessage() . "\n"
            );
        }
    }

    public function initialData(): void
    {
        $this->findUsername();
        $this->findPassword();
        $this->findHomeNumber();
        $this->findHomeNumber();
        $this->findUrl();
        $this->findisFlash();

        $this->buildParams();
    }

    private function buildParams(): void
    {
        $this->params['fromNumber'] = $this->fromNumber;
        $this->params['userName'] = $this->username;
        $this->params['password'] = $this->password;
        $this->params['isFlash'] = $this->isFlash;
    }

    protected function findUsername(): void
    {
        $this->username = config('sms.drivers.media.username');
    }

    protected function findPassword(): void
    {
        $this->password = config('sms.drivers.media.username');
    }

    protected function findHomeNumber(): void
    {
        $this->fromNumber = config('sms.drivers.media.username');
    }

    private function findUrl(): void
    {
        $this->url = config('sms.drivers.media.url');
    }

    private function findIsFlash(): void
    {
        $this->isFlash = config('sms.drivers.media.username');
    }
}
