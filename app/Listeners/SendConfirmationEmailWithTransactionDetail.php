<?php

namespace App\Listeners;

use App\Events\MoneyTransferred;
use App\Mail\SendTransactionDetailMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendConfirmationEmailWithTransactionDetail implements ShouldQueue
{
    public function __construct() {}

    public function handle(MoneyTransferred $event): void
    {
	    Mail::to('arash.nykbakht@gmail.com')
		    ->send(new SendTransactionDetailMail($event->transaction, $event->sender, $event->receiver));
    }
}
