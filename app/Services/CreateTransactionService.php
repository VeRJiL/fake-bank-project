<?php

namespace App\Services;

use App\Models\Transaction;

class CreateTransactionService
{
	public function execute(array $data): Transaction
	{
		return Transaction::create($data);
	}
}