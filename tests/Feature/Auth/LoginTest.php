<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Helpers\TableNames;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
	use RefreshDatabase;
	
	protected function setUp(): void
	{
		parent::setUp();
		
		$this->createLoggedInUser();
	}
	
	/** @test */
    public function user_can_login_after_signup(): void
    {
        $response = $this->post('/api/v1/auth/login', $this->loginData(
	        $this->signUpData()['national_code'],
	        $this->signUpData()['password']
        ));

        $response->assertStatus(200);
		
		$this->assertDatabaseCount(TableNames::personalTokens, 2);
    }
	
	/** @test */
	public function user_can_not_login_with_wrong_user_name()
	{
		$response = $this->post('/api/v1/auth/login', $this->loginData(
			"0987654321",
			$this->signUpData()['password']
		));
		
		$response->assertStatus(406);
	}
	
	/** @test */
	public function user_can_not_login_with_wrong_password()
	{
		$response = $this->post('/api/v1/auth/login', $this->loginData(
			$this->signUpData()['national_code'],
			"Some Gibberish"
		));
		
		$response->assertStatus(406);
	}
	
	private function loginData(string $username, $password): array
	{
		return [
			'username' => $username,
			'password' => $password,
			'device_name' => $this->signUpData()['device_name'],
		];
	}
}
