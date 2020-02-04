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
    public $standard;
    public $deluxe;
    public $studio;
    public $executive;
    public $royal;
    public $diplomatic;
    public $bedroom;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $email, $room_num, $guest_num, $start_date, $end_date, $standard, $deluxe, $studio, $royal, $diplomatic, $executive, $bedroom)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->room_num = $room_num;
        $this->guest_num = $guest_num;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->standard = $standard;
        $this->deluxe = $deluxe;
        $this->executive = $executive;
        $this->royal = $royal;
        $this->diplomatic = $diplomatic;
        $this->bedroom = $bedroom;
        $this->studio = $studio;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Reservation')->view('mails.reservation');
    }
}
