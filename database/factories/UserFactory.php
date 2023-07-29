<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Domain\User\Models\User;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'national_code' => fake()->uuid(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("admin1234"),
            'remember_token' => Str::random(10),
        ];
    }
	
	public function setPassword(string $password)
	{
		return $this->state(function(array $attributes) use ($password) {
			return [
				"password" => Hash::make($password)
			];
		});
	}
	
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
