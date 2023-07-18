<?php

namespace Tests\Feature\BankAccount;

use Tests\TestCase;
use App\Models\User;
use App\Models\BankAccount;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransferMoneyTest extends TestCase
{
	use RefreshDatabase;
	
	private Collection $users;
	
	protected function setUp(): void
	{
		parent::setUp();
		
		$this->createLoggedInUser();
		
		$this->seedFakeData();
	}
	
	/** @test */
    public function user_can_send_money_to_someone_else_bank_account(): void
    {
        $response = $this->withHeaders(["Authorization" => "Bearer {$this->loggedInUser->token}"])
	        ->post('/api/v1/bank-accounts/transfer', $this->data());

        $response->assertStatus(200);
    }
	
	private function data(): array
	{
		return [
			"sender" => $this->users[0]->bankAccounts[0]->uuid,
			"receiver" => $this->users[1]->bankAccounts[0]->uuid,
			"amount" => 1000
		];
	}
	
	private function seedFakeData()
	{
		User::factory(2)->create();
		
		$this->users = User::all();
		
		$this->users->each(function (User $user) {
			$user->bankAccounts()->createMany(
				BankAccount::factory(2)->make()->toArray()
			);
		});
	}
}
