<?php

namespace Tests\Feature\Auth;

use App\Helpers\TableNames;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SignUpTest extends TestCase
{
	use RefreshDatabase;
	
    /** @test */
    public function user_can_be_created(): void
    {
        $response = $this->post('/api/v1/users/', $this->data());

        $response->assertStatus(200);
		
		$this->assertDatabaseCount(TableNames::user, 1);
		
		$user = User::first();
		
		$this->assertEquals($this->data()["first_name"], $user->first_name);
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
			"password" => Hash::make("arash1234"),
		];
	}
}
