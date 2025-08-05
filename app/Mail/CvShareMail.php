<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class CvShareMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public array $files;
    public array $formData;

    public function __construct(array $files, array $formData)
    {
        $this->files = $files;
        $this->formData = $formData;
    }

    /**
     * Get the message envelope.
     */
       public function envelope(): Envelope
    {
        return new Envelope(
          
            subject: 'CV di Doina Nicolau (IT/EN)', // Un oggetto più descrittivo
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.cv-share',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        // Aggiungi gli allegati solo se i file sono stati passati
        if (isset($this->files['italiano'])) {
            $attachments[] = Attachment::fromPath($this->files['italiano'])
                ->as('CV_Doina_Nicolau_IT.pdf');
        }

        if (isset($this->files['inglese'])) {
            $attachments[] = Attachment::fromPath($this->files['inglese'])
                ->as('CV_Doina_Nicolau_EN.pdf');
        }

        return $attachments;
    }
}
