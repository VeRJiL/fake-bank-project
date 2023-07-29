<?php

namespace Tests\Feature\BankAccount;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Domain\BankAccount\Models\BankAccount;
use Domain\Transaction\Models\Transaction;
use Tests\TestCase;

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
        $response = $this->post('/api/v1/bank-accounts/transfer', $this->toSomebodyElseData());

        $response->assertStatus(200);
    }
	
	/** @test */
	public function user_can_send_money_to_his_other_account()
	{
		$response = $this->post('/api/v1/bank-accounts/transfer', $this->toHimSelfData());
		
		$response->assertStatus(200);
	}
	
	/** @test */
	public function user_can_not_transfer_more_than_his_balance()
	{
		$response = $this->withHeaders(["Authorization" => "Bearer {$this->loggedInUser->token}"])
			->post('/api/v1/bank-accounts/transfer', $this->toSomebodyElseData(
				$this->users[0]->bankAccounts[0]->balance + 1
			));
		
		$response->assertStatus(406);
	}
	
	private function toSomebodyElseData(int $amount = 1000): array
	{
		return [
			"sender" => $this->users[0]->bankAccounts[0]->uuid,
			"receiver" => $this->users[1]->bankAccounts[0]->uuid,
			"amount" => $amount
		];
	}
	
	private function toHimSelfData(): array
	{
		return [
			"sender" => $this->users[0]->bankAccounts[0]->uuid,
			"receiver" => $this->users[0]->bankAccounts[1]->uuid,
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
