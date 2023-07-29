<?php

namespace Api\BankAccount;

use App\Controller;
use Illuminate\Http\JsonResponse;
use Requests\BankAccount\CreateBankAccountRequest;
use Resources\BankAccountResource;

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
