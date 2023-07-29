<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Domain\Transaction\Models\Transaction;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "sender_id" => 1,
	        "receiver_id" => 1,
	        "amount" => 20000
        ];
    }
	
	public function setSender(int $senderId)
	{
		return $this->state(function (array $attributes) use ($senderId) {
			return [
				"sender_id" => $senderId
			];
		});
	}
	
	public function setReceiver(int $receiverId)
	{
		return $this->state(function (array $attributes) use ($receiverId) {
			return [
				"receiver_id" => $receiverId
			];
		});
	}
}
