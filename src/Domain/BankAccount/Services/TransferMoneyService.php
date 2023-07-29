<?php

namespace Services;

use Illuminate\Support\Facades\DB;
use Domain\BankAccount\Models\BankAccount;

class TransferMoneyService
{
	public function execute(BankAccount $sender, BankAccount $receiver, int $amount): void
	{
		DB::transaction(function() use ($sender, $receiver, $amount) {
			$sender->balance -= $amount;
			$sender->save();
			
			$receiver->balance += $amount;
			$receiver->save();
		});
	}
}