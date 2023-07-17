<?php

namespace Tests\Feature\Auth;

use App\Helpers\TableNames;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

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
		
		$this->assertDatabaseCount(TableNames::user, 1);
		
		$this->assertDatabaseHas(TableNames::user, [
			'national_code' => $this->data()['national_code']
		]);
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
