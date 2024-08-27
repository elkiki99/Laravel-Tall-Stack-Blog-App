<?php

namespace App\Livewire\Contact;

use App\Mail\ContactUs;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUsForm extends Component
{
    public $user;
    public $email;
    public $message;

    protected $rules = [
        'email' => 'required|email',
        'message' => 'required|min:10|max:500',
    ];

    public function submit()
    {
        $this->validate();
    
        $user = auth()->user();
        $userName = $user ? $user->name : 'Guest';
        $userEmail = $user ? $user->email : $this->email;
        $nickname = $user ? $user->nickname : 'N/A';
        $userRole = $user ? $user->role : 'N/A';
        $url = $user ? config('app.url') . '/user/' . $user->nickname : 'N/A';
    
        Mail::to('gazzete@localhost')->send(new ContactUs(
            $this->email,
            $this->message,
            $userName,
            $userEmail,
            $nickname,
            $userRole,
            $url
        ));
    
        return redirect()->route('contact')->with('message-sent', 'Message sent successfully.');
    }

    public function render()
    {
        return view('livewire.contact.contact-us-form');
    }
}
