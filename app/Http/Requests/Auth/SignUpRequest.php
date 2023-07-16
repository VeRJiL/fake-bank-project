<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class SignUpRequest extends FormRequest
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
            "first_name" => "required|string|min:3|max:50",
            "last_name" => "required|string|min:3|max:50",
	        "national_code" => "required",
	        "email" => "nullable|email",
	        "password" => "required|min:5|max:30",
	        "device_name" => "required|array",
	        'phone_number' => "required",
        ];
    }
	
	public function allowedInputs(): array
	{
		return array_merge(
			$this->only(["first_name", "last_name", "national_code", "email", "phone_number"]),
			['password' => Hash::make($this->password)]
		);
	}
}
