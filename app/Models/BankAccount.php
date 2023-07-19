<?php

namespace App\Models;

use App\Helpers\TableNames;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BankAccount extends Model
{
    use HasFactory;
	
	protected $guarded = [];
	
	public function owners(): BelongsToMany
	{
		return $this->belongsToMany(User::class, TableNames::bankAccountOwners);
	}
	
	public function senderTransactions(): HasMany
	{
		return $this->hasMany(Transaction::class, "sender_id");
	}
	
	public function receiverTransactions(): HasMany
	{
		return $this->hasMany(Transaction::class, "receiver_id");
	}
	
	public function transactions(): Collection
	{
		return $this->senderTransactions()->get()->merge(
			$this->receiverTransactions()->get()
		);
	}
}
