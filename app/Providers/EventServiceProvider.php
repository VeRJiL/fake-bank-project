<?php

namespace App\Providers;

use App\Events\MoneyTransferred;
use App\Listeners\SendConfirmationEmailWithTransactionDetail;
use App\Listeners\SendConfirmationSMSWithTransactionDetail;
use App\Models\BankAccount;
use App\Observers\BankAccountObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
	    
	    MoneyTransferred::class => [
			SendConfirmationSMSWithTransactionDetail::class,
		    SendConfirmationEmailWithTransactionDetail::class
	    ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        BankAccount::observe(BankAccountObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
