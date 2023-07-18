<?php

namespace App\Listeners;

use App\Events\MoneyTransferred;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendConfirmationSMSWithTransactionDetail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MoneyTransferred $event): void
    {
		// TODO: just for simplicity we assume that we are actually sending the SMS
        echo $event->transaction->id;
    }
}
