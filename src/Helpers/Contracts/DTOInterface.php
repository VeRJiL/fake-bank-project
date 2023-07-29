<?php

namespace Helpers\Contracts;

interface DTOInterface
{
    public static function fromArray(array $data): static;
    public function validate(array $data, bool $someTimes = false): void;
}
