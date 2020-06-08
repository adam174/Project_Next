<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'royalhotel@nachattube.com';
        $subject = 'Confirmation de reservation';
        $name = 'Royal Hotel';

        return $this->view('emails.myTestMail')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'price' => $this->data['price'],'client' => $this->data['client'],'arrival' => $this->data['arrival'],'departure' => $this->data['departure'],'room_type' => $this->data['room_type'] ]);
    }
}