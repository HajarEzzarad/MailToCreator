<?php

namespace App\Mail;

use Dflydev\DotAccessData\Data;
use GuzzleHttp\Psr7\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\View\View;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
    
    public $email;
    public $content;
    public $name;

    public function __construct($email, $content, $name)
    {
       $this->email= $email;
       $this->content=$content;
       $this->name=$name;

    }
    public function envelope(): Envelope
    {
        return new Envelope(

            subject: 'Message From FORM',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new content(
            view : 'mail.message',
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
