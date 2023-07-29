<?php

namespace Tests\Feature\BankAccount;

use Enums\Currency;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateBankAccountTest extends TestCase
{
	use RefreshDatabase;
	
	protected function setUp(): void
	{
		parent::setUp();
		
		$this->createLoggedInUser();
	}
	
	/** @test */
	public function test_example(): void
	{
		$response = $this->withHeaders(["Authorization" => "Bearer {$this->loggedInUser->token}"])
			->post('/api/v1/bank-accounts', $this->data());
		
		$response->assertStatus(200);
	}
	
	private function data(): array
	{
		return [
			"name" => "International Account",
			"description" => "This account is used to store only $",
			"balance" => "2000",
			"currency" => Currency::randomValue()
		];
	}
}
