<?php

namespace Tests\Feature\Auth;

use App\Helpers\TableNames;
use Tests\TestCase;

class LoginTest extends TestCase
{
	protected function setUp(): void
	{
		parent::setUp();
		
		$this->post("/api/v1/auth/signup", $this->signUpData());
	}
	
	/** @test */
    public function test_example(): void
    {
        $response = $this->post('/api/v1/auth/login', $this->loginData());

        $response->assertStatus(200);
		
		$this->assertDatabaseCount(TableNames::personalToken, 2);
    }
	
	private function loginData(): array
	{
		return [
			'username' => $this->signUpData()['national_code'],
			'password' => $this->signUpData()['password'],
			'device_name' => $this->signUpData()['device_name'],
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
