<?php

namespace Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Domain\BankAccount\Models\BankAccount;
use Domain\Transaction\Models\Transaction;

class MoneyTransferred
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
		public Transaction $transaction,
		public BankAccount $sender,
		public BankAccount $receiver
    ) {}

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
