<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationCancel extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $reservationCancel;
    public function __construct($reservationCancel)
    {
        $this -> reservationCancel = $reservationCancel;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('backEnd.content.email.cancelEmail')->with(['reservationData'=>$this -> reservationCancel]);
    }
}
