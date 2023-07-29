<?php

namespace Enums;

use Helpers\Traits\EnumTrait;

enum Currency: string
{
	use EnumTrait;
	
	case DOLLAR = "dollar";
	case EURO = "euro";
	case POUND = "pound";
	case RIAL = "rial";
	
	public function description(): string
	{
		return match ($this) {
			Currency::DOLLAR => '$',
			Currency::EURO => '€',
			Currency::POUND => '£',
			Currency::RIAL => 'ريال',
		};
	}
}
