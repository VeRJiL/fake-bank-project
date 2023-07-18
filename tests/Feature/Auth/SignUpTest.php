<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Helpers\TableNames;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignUpTest extends TestCase
{
	use RefreshDatabase;
	
	/** @test */
    public function user_can_be_created(): void
    {
        $response = $this->post('/api/v1/auth/signup', $this->data());
		
        $response->assertStatus(200);
	
	    $response->assertJson(function (AssertableJson $json) {
		    $json->has('data');
	    });
		
		$this->assertDatabaseCount(TableNames::users, 1);
		
		$this->assertDatabaseHas(TableNames::users, [
			'national_code' => $this->data()['national_code']
		]);
    }
	
	/** @test */
	public function user_can_not_register_with_same_national_code()
	{
		$this->post('/api/v1/auth/signup', $this->data());
		
		$response = $this->post('/api/v1/auth/signup', $this->data());
		
		$response->assertStatus(406);
	}
	
	private function data(): array
	{
		return [
			"first_name" => "Arash",
			"last_name" => "Nikbakht",
			"phone_number" => "+905368499136",
			"national_code" => "1234567890",
			"email" => "arash.nykbakht@gmail.com",
			"email_verified_at" => now(),
			"password" => "arash1234",
			"device_name" => ["windows", "firefox", "browser"]
		];
	}
}
