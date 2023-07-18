<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
	
	protected $guarded = [];
	
	public function sender(): BelongsTo
	{
		return $this->belongsTo(BankAccount::class, "sender_id");
	}
	
	public function receiver(): BelongsTo
	{
		return $this->belongsTo(BankAccount::class, "receiver_id");
	}
}
