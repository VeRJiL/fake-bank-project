<?php

namespace Domain\BankAccount\Observers;

use Domain\BankAccount\Models\BankAccount;

class BankAccountObserver
{
	public function creating(BankAccount $bankAccount)
	{
		$bankAccount->uuid = generateUuid();
    }
}
