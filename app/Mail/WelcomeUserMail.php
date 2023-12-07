<?php

namespace App\Mail;

use App\Http\Requests\Dashboard\MessageRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class WelcomeUserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function envelope()
    {
        return new Envelope(
            from: new Address($this->data->email, $this->data->name),
            subject: settings()->website_title,
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.welcome',
        );
    }

    public function attachments()
    {
        // $file = $this->message->file()->first();
        // if ($file) {
        //     $path = $file->getRawOriginal('path');
        //     return [
        //         Attachment::fromStorage($path),
        //     ];
        // }
    }
}
