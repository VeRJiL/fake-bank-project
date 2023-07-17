<?php

namespace App\Http\Requests\BankAccount;

use App\Enums\Currency;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateBankAccountRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => "nullable|string|min:3|max:100",
	        "description" => "nullable|string",
	        "balance" => "required|numeric",
	        "currency" => [
				"required",
		        Rule::in(Currency::values())
	        ]
        ];
    }
	
	public function allowedInputs(): array
	{
		return $this->only(["name", "description", "balance"]);
	}
}
