<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $tel;
    public $email;
    public $room_num;
    public $guest_num;
    public $start_date;
    public $end_date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $email, $room_num, $guest_num, $start_date, $end_date)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->room_num = $room_num;
        $this->guest_num = $guest_num;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.reservation');
    }
}
