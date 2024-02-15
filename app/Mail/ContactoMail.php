<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contacto;
    /**
     * Create a new message instance.
     */
    public function __construct($contacto)
    {
        //
        $this-> contacto= $contacto;
    }


    public function build()
    {
        return $this->view('emails.mail');
    }
}
