<?php

// app/Mail/ClientVerificationCode.php
namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientVerificationCode extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Client $client, public string $code) {}

    public function build() {
        return $this->subject('Votre code de confirmation - AM5Auto')
            ->view('vitrine.emails.client_verification_code');
    }
}
