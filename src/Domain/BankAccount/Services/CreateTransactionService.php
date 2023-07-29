<?php

namespace Services;

use Domain\Transaction\Models\Transaction;

class CreateTransactionService
{
	public function execute(array $data): Transaction
	{
		return Transaction::create($data);
	}
}