<?php

namespace App\Http\Requests\BankAccount;

use App\Helpers\TableNames;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransferMoneyRequest extends FormRequest
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
            "sender" => [
				"required",
	            Rule::exists(TableNames::bankAccounts, 'uuid')
            ],
	        "receiver" => [
		        "required",
		        Rule::exists(TableNames::bankAccounts, 'uuid')
	        ],
	        "amount" => "required|numeric"
        ];
    }
	
	public function allowedInputs(): array
	{
		return $this->only(["sender", "receiver", "amount"]);
	}
}
