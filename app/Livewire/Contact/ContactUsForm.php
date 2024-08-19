<?php

namespace App\Livewire\Contact;

use App\Mail\ContactUs;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUsForm extends Component
{
    public $email;
    public $message;

    protected $fillable = [
        'email',
        'message',
    ];

    protected $rules = [
        'email' => 'required|email',
        'message' => 'required|min:10|max:500',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('brossani23@gmail.com')->send(new ContactUs($this->email, $this->message));

        return redirect()->route('contact')->with('message-sent', 'Message sent successfully.');
    }

    public function render()
    {
        return view('livewire.contact.contact-us-form');
    }
}
