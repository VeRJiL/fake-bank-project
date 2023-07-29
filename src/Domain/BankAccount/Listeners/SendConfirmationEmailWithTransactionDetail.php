<?php

namespace Listeners;

use Events\MoneyTransferred;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Mail\SendTransactionDetailMail;

class SendConfirmationEmailWithTransactionDetail implements ShouldQueue
{
    public function __construct() {}

    public function handle(MoneyTransferred $event): void
    {
	    Mail::to('arash.nykbakht@gmail.com')
		    ->send(new SendTransactionDetailMail($event->transaction, $event->sender, $event->receiver));
    }
}
