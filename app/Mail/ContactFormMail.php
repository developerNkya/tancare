<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->from('info@tancare.tz', 'TanCare Website')
                    ->replyTo($this->formData['email'], $this->formData['name'])
                    ->subject('New Contact Form: ' . $this->formData['subject'])
                    ->view('emails.contact-form');
    }
}