<?php

namespace App\Http\Controllers\BankAccount;

use App\Models\BankAccount;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionCollection;

class GetBankAccountTransactionsController extends Controller
{
	public function execute(BankAccount $bankAccount): JsonResponse
	{
		return response()->json([
			"data" => new TransactionCollection($bankAccount->transactions())
		]);
    }
}
