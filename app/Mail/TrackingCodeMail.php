<?php

// app/Mail/TrackingCodeMail.php
namespace App\Mail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrackingCodeMail extends Mailable {
  use Queueable, SerializesModels;
  public function __construct(public Order $order) {}
  public function build(){
    return $this->subject('Votre code de suivi - AM5Auto')
        ->view('vitrine.emails.tracking_code');
  }
}
