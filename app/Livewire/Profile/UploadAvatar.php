<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UploadAvatar extends Component
{
    use WithFileUploads;

    public $user;
    public $avatar;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function uploadAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:1024',
        ]);

        $directory = 'public/avatars';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        $avatarPath = $this->avatar->store($directory);
        $avatarName = basename($avatarPath);

        $this->user->update([
            'avatar' => $avatarName,
        ]);
        return redirect()->route('profile.picture')->with('success_created', ' uploaded successfully.');
    }

    public function render()
    {
        return view('livewire.profile.upload-avatar');
    }
}