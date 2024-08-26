<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $userName;
    public $userEmail;
    public $nickname;
    public $userRole;
    public $message;
    public $email;
    public $url;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $message, $userName = 'Guest', $userEmail = 'N/A', $nickname = 'N/A', $userRole = 'N/A', $url = 'N/A')
    {
        $this->email = $email;
        $this->message = $message;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->nickname = $nickname;
        $this->userRole = $userRole;
        $this->url = $url;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact us',
            tags: ['contact', 'us'],
            metadata: [
                'user_name' => $this->userName,
                'user_email' => $this->userEmail,
                'nickname' => $this->nickname,
                'user_role' => $this->userRole,
            ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-us',
            with: [
                'userName' => $this->userName,
                'userEmail' => $this->userEmail,
                'nickname' => $this->nickname,
                'userRole' => $this->userRole,
                'message' => $this->message,
                'url' => $this->url,
            ]
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
