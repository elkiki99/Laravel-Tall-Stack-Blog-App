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
    public $message;
    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct($email, $message)
    {
        $this->user = auth()->user();
        $this->email = $email;
        $this->message = $message;
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
                'user' => $this->user,
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
                // 'userName' => $this->user->name,
                // 'userEmail' => $this->user->email,
                // 'nickname' => $this->user->nickname,
                // 'role' => $this->user->role,
                // 'url' => config('app.url') . '/user/' . $this->user->nickname,
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
