<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

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
    public function __construct($email, $url, $message, $userName = 'Guest', $userEmail = 'N/A', $nickname = 'N/A', $userRole = 'N/A')
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
                // 'userName' => $this->user ? $this->user->name : 'Guest',
                // 'userEmail' => $this->user ? $this->user->email : $this->email,
                // 'nickname' => $this->user ? $this->user->nickname : 'N/A',
                // 'userRole' => $this->user ? $this->user->role : 'N/A',
                // 'message' => $this->message,
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
