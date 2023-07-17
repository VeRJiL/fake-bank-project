<?php

namespace App\Http\Controllers\BankAccount;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankAccount\CreateBankAccountRequest;
use App\Http\Resources\BankAccountResource;
use Illuminate\Http\JsonResponse;

class CreateBankAccountController extends Controller
{
	public function execute(CreateBankAccountRequest $request): JsonResponse
	{
		$bankAccount = $request->user()->bankAccounts()->create(
			$request->allowedInputs()
		);
		
		if (!$bankAccount) {
			return response()->json([
				"data" => null,
				"message" => "Something went Wrong!"
			]);
		}
		
		return response()->json([
			"data" => new BankAccountResource($bankAccount)
		]);
    }
}
