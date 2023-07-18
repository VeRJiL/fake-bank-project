<?php

namespace App\Observers;

use App\Models\BankAccount;

class BankAccountObserver
{
	public function creating(BankAccount $bankAccount)
	{
		$bankAccount->uuid = generateUuid();
    }
}
