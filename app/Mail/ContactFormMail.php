<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $contactData
    ) {}

    public function build()
    {
        return $this->subject('New Portfolio Contact Message')
            ->view('emails.contact');
    }
}