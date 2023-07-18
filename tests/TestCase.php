<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
	
	protected object $loggedInUser;
	
	protected function createLoggedInUser()
	{
		$response = $this->post("/api/v1/auth/signup", $this->signUpData());
		
		$this->loggedInUser = json_decode($response->getContent())->data;
		
		$this->withHeader("Authorization", "Bearer {$this->loggedInUser->token}");
	}
	
	protected function signUpData(): array
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
