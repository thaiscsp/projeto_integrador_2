<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mensagem extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $nome, $mensagem)
    {
        $this->email = $email;
        $this->nome = $nome;
        $this->mensagem = $mensagem;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova mensagem de ' . $this->email)->view('emails.mensagem', ['email'=>$this->email, 'nome'=>$this->nome, 'mensagem'=>$this->mensagem]);
    }
}
