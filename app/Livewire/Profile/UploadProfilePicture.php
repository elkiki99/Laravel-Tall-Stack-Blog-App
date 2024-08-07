<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UploadProfilePicture extends Component
{
    use WithFileUploads;

    public $user;
    public $profile_pic;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function uploadProfilePicture()
    {
        $this->validate([
            'profile_pic' => 'required|image|max:1024',
        ]);

        $directory = 'public/profile_pics';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        $profilePicPath = $this->profile_pic->store($directory);
        $profilePicName = basename($profilePicPath);

        $this->user->update([
            'profile_pic' => $profilePicName,
        ]);
        return redirect()->route('profile.picture')->with('success_created', 'Profile picture uploaded successfully.');
    }

    public function render()
    {
        return view('livewire.profile.upload-profile-picture');
    }
}