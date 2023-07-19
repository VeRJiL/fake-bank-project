<?php

namespace App\Http\Controllers\BankAccount;

use App\Models\BankAccount;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\BankAccountResource;

class GetBankAccountDetailController extends Controller
{
	public function execute(BankAccount $bankAccount): JsonResponse
	{
		return response()->json([
			"data" => new BankAccountResource($bankAccount)
		]);
    }
}
