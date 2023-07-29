<?php

namespace Api\BankAccount;

use App\Controller;
use Illuminate\Http\JsonResponse;
use Domain\BankAccount\Models\BankAccount;
use Resources\BankAccountResource;

class GetBankAccountDetailController extends Controller
{
	public function execute(BankAccount $bankAccount): JsonResponse
	{
		return response()->json([
			"data" => new BankAccountResource($bankAccount)
		]);
    }
}
