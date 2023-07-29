<?php

namespace Helpers\Abstracts;

use ReflectionClass;

abstract class DataTransferObject
{
    protected function getValidationRule(array $rules, bool $someTimes): array
    {
        $needToEscape = [];

        if ($someTimes) {
            $needToEscape = ['sometimes'];
        }

        return array_merge($rules, $needToEscape);
    }

	public function fillables(): array
	{
		return [];
    }

    public function toArray(): array
    {
        $dto = new ReflectionClass(static::class);
        $objectProperties = $dto->getProperties();

        $finalObjectArray = [];

        foreach ($objectProperties as $objectProperty) {
            $finalObjectArray[$objectProperty->name] = $this->{$objectProperty->name};
        }

        return $finalObjectArray;
    }

    public function __get(string $name)
    {
        $class = new ReflectionClass(static::class);

        if ($class->hasProperty($name)) {
            return $this->{$name};
        }

        return null;
    }

    public function __set(string $name, $value)
    {
        $data[$name] = $value;
        $this->validate($data, true);
        $this->{$name} = $value;

        return $this;
    }

    public function __isset(string $name): bool
    {
        $class = new ReflectionClass(static::class);

        if ($class->hasProperty($name)) {
            return true;
        }

        return false;
    }
}
