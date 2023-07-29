<?php

namespace Helpers;

class FlashMessage
{
    private string $type;
    private string|int $time = '3000';

    private function message($message): void
    {
        session()->flash('flashMessage', [
            'message' => $message,
            'type' => $this->type,
            'time' => $this->time
        ]);
    }

    public function setTime($time): self
    {
        $this->time = $time * 1000;

        return $this;
    }

    public function success($message): void
    {
        $this->type = 'success';

        $this->message($message);
    }

    public function error($message): void
    {
        $this->type = 'error';

        $this->message($message);
    }

    public function warning($message): void
    {
        $this->type = 'warning';

        $this->message($message);
    }

    public function info($message): void
    {
        $this->type = 'info';

        $this->message($message);
    }
}
