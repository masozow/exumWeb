<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $remitente;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $remitente, $mensaje)
    {
        $this->name=$name;
        $this->remitente=$remitente;
        $this->mensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $asunto='Contacto desde página, de: '.$this->name.' ('.$this->remitente.')';
        return $this->from($this->remitente)->subject($asunto)->view('email.name');
    }
}
