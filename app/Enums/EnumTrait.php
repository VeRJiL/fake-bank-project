<?php

namespace App\Enums;

trait EnumTrait
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function randomValue(): string
    {
        $enum = array_column(self::cases(), 'value');

        return $enum[array_rand($enum)];
    }

    public static function randomName(): string
    {
        $enum = array_column(self::cases(), 'name');

        return $enum[array_rand($enum)];
    }

    public static function random()
    {
        $enums = self::cases();

        return $enums[array_rand($enums)];
    }
}
