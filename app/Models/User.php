<?php

namespace App\Models;

use App\Helpers\TableNames;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
		return $this->belongsToMany(BankAccount::class, TableNames::bankAccountOwners);
	}
	
	public function fullName(): Attribute
	{
		return Attribute::get(function() {
			return sprintf("%s %s", $this->first_name, $this->last_name);
		});
	}
}
