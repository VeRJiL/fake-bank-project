<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
			'firstName' => $this->first_name,
			'lastName' => $this->last_name,
	        'nationalCode' => $this->national_code,
	        'email' => $this->email,
	        'phoneNumber' => $this->phone_number,
	        'token' => $this->token,
        ];
    }
}