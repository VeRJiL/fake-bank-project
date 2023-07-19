<?php

namespace Tests\Feature\BankAccount;

use Tests\TestCase;
use App\Models\User;
use App\Models\Transaction;
use App\Models\BankAccount;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageBankAccountTest extends TestCase
{
	use RefreshDatabase;
	
	protected function setUp(): void
	{
		parent::setUp();
		
		$this->createLoggedInUser();
		
		$this->seedData();
	}
	
	/** @test */
    public function user_can_retrieve_account_detail_including_balance(): void
    {
		$randomBankAccount = BankAccount::inRandomOrder()->limit(1)->first();
		
        $response = $this->get("/api/v1/bank-accounts/{$randomBankAccount->id}");
		
		$responseData = json_decode($response->getContent())->data;

        $response->assertStatus(200);
		
		$this->assertEquals($randomBankAccount->balance, $responseData->balance);
    }
	
	/** @test */
	public function user_can_retrieve_transactions_on_one_of_his_bank_accounts()
	{
		$randomBankAccount = BankAccount::inRandomOrder()->limit(1)->first();
		
		$response = $this->get("/api/v1/bank-accounts/{$randomBankAccount->id}/transactions");
		
		$response->assertStatus(200);
	}
	
	private function seedData(): void
	{
		$this->createDataForLoggedInUser();
		
		$users = User::factory(2)->create();
		
		$users->each(function (User $user) {
			$user->bankAccounts()->createMany(
				BankAccount::factory(2)->make()->toArray()
			);
		});
		
		BankAccount::all()->each(function (BankAccount $bankAccount) {
			Transaction::factory(10)
				->setSender($bankAccount->id)
				->setReceiver(BankAccount::inRandomOrder()->limit(1)->first()->id)
				->create();
		});
	}
	
	private function createDataForLoggedInUser()
	{
		$userObject = User::find($this->loggedInUser->id);
		
		$userObject->bankAccounts()->create(
			$this->data()
		);
	}
	
	private function data(): array
	{
		return [
			"name" => "test bank account",
			"description" => "description for test bank account",
			"balance" => 20000
		];
	}
}
