<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address; 

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageBody; // Usiamo messageBody per non confonderci con il metodo message()

    /**
     * Create a new message instance.
     *
     * @param array $data L'array dei dati validati dal form
     * @return void
     */

    public function __construct(array $data)
    {
          // Assegniamo i dati ricevuti alle nostre proprietà
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->messageBody = $data['message'];
    }

        /**
     * Build the message.
     *
     * @return $this
     */

    public function envelope(): Envelope
    {
        return new Envelope(
           from: new Address($this->email, $this->name),
            // Puoi anche definire un "replyTo" per rispondere direttamente a chi ti ha scritto
            replyTo: [
                new Address($this->email, $this->name),
            ],
            subject: 'Nuovo Messaggio dal Portfolio',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
               view: 'emails.contact_form', // Assicurati di avere una vista chiamata 'emails.contact_form'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
