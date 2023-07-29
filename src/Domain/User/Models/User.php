<?php

namespace Domain\Transaction\Models;

use Helpers\TableName;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Domain\BankAccount\Domain\BankAccount\Models\BankAccount;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	
	protected $guarded = [];
	
    protected $hidden = [
        'password',
        'remember_token',
    ];
	
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
	
	public function bankAccounts(): BelongsToMany
	{
		return $this->belongsToMany(BankAccount::class, TableName::bankAccountOwners);
	}
	
	public function fullName(): Attribute
	{
		return Attribute::get(function() {
			return sprintf("%s %s", $this->first_name, $this->last_name);
		});
	}
}
