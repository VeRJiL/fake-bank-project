<?php

namespace App\Models;

use App\Helpers\TableNames;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BankAccount extends Model
{
    use HasFactory;
	
	protected $guarded = [];
	
	public function owners(): BelongsToMany
	{
		return $this->belongsToMany(User::class, TableNames::bankAccountOwners);
	}
	
	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
