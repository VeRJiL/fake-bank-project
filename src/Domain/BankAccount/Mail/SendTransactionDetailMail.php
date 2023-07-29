<?php

namespace Domain\BankAccount\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Domain\BankAccount\Domain\BankAccount\Models\BankAccount;
use Domain\Transaction\Domain\Transaction\Models\Transaction;
use Illuminate\Mail\Mailables\Attachment;

class SendTransactionDetailMail extends Mailable
{
    use Queueable, SerializesModels;
	
    public function __construct(
		public Transaction $transaction,
		public BankAccount $sender,
		public BankAccount $receiver
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
			from: new Address("arash.nykbakht@gmail.com", "Fake Bank"),
            subject: 'Send Transaction Detail Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.transaction-detail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
