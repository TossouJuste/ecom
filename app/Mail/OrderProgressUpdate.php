<?php

namespace App\Mail;

use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderProgressUpdate extends Mailable
{use Queueable, SerializesModels;

    public $order;

    public function __construct(Orders $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Mise à jour de votre réservation - ' . $this->order->tracking_code)
                    ->view('emails.order-progress-update');
    }
}
