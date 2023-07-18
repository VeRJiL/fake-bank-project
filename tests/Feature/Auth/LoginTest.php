<?php

namespace Tests\Feature\Auth;

use App\Helpers\TableNames;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
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
        $response = $this->post('/api/v1/auth/login', $this->loginData());

        $response->assertStatus(200);
		
		$this->assertDatabaseCount(TableNames::personalTokens, 2);
    }
	
	private function loginData(): array
	{
		return [
			'username' => $this->signUpData()['national_code'],
			'password' => $this->signUpData()['password'],
			'device_name' => $this->signUpData()['device_name'],
		];
	}
}
