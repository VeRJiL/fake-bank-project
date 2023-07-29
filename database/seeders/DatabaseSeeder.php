<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Domain\BankAccount\Models\BankAccount;
use Domain\Transaction\Models\Transaction;
use Domain\User\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'fake bank',
            'email' => 'admin@fakebank.com',
            'national_code' => '1234567890',
            'password' => Hash::make('admin1234'),
        ]);
		
		User::factory(9)->create();
		
		User::all()->each(function(User $user) {
			$user->bankAccounts()->createMany(
				BankAccount::factory(3)->make()->toArray()
			);
		});
		
		BankAccount::all()->each(function (BankAccount $bankAccount) {
			Transaction::factory(5)
				->setSender($bankAccount->id)
				->setReceiver(BankAccount::inRandomOrder()->limit(1)->first()->id)
				->create();
		});
    }
}
