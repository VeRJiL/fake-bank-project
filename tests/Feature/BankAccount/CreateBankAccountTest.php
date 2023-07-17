<?php

namespace Tests\Feature\BankAccount;

use App\Enums\Currency;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateBankAccountTest extends TestCase
{
	use RefreshDatabase;
	
	private object $user;
	
	protected function setUp(): void
	{
		parent::setUp();
		
		$response = $this->post("/api/v1/auth/signup", $this->signUpData());
		
		$this->user = json_decode($response->getContent())->data;
	}
	
	/** @test */
	public function test_example(): void
	{
		$response = $this->withHeaders(["Authorization" => "Bearer {$this->user->token}"])
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
	
	private function signUpData(): array
	{
		return [
			"first_name" => "Arash",
			"last_name" => "Nikbakht",
			"phone_number" => "+905368499136",
			"national_code" => "1234567890",
			"email" => "arash.nykbakht@gmail.com",
			"email_verified_at" => now(),
			"password" => "arash1234",
			"device_name" => ["windows", "chrome", "browser"]
		];
	}
}
