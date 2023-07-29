<?php

namespace App\Providers;

use Events\MoneyTransferred;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Listeners\SendConfirmationEmailWithTransactionDetail;
use Listeners\SendConfirmationSMSWithTransactionDetail;
use Domain\BankAccount\Models\BankAccount;
use Domain\BankAccount\Observers\BankAccountObserver;

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
