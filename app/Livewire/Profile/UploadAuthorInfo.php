<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class UploadAuthorInfo extends Component
{
    use WithFileUploads;

    public $user;
    public $linkedin_profile;
    public $website;
    public $bio;
    public $nickname;
    public $avatar;

    public function mount($user)
    {
        $this->user = $user;
        $this->linkedin_profile = $user->linkedin_profile;
        $this->website = $user->website;
        $this->bio = $user->bio;
        $this->nickname = $user->nickname;
    }

    public function uploadAuthorInfo()
    {
        $this->validate([
            'linkedin_profile' => 'nullable|url',
            'website' => 'nullable|url',
            'bio' => 'nullable|string|max:1024',
            'nickname' => 'string|max:40',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $avatarName = $this->user->avatar;

        if ($this->avatar) {
            $directory = 'public/avatars';
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }

            $avatarPath = $this->avatar->store($directory);
            $avatarName = basename($avatarPath);
        }
        else {
            $avatarName = $this->user->avatar;
        }

        $this->user->update([
            'linkedin_profile' => $this->linkedin_profile,
            'website' => $this->website,
            'bio' => $this->bio,
            'nickname' => $this->nickname,
            'avatar' => $avatarName,
        ]);
        return redirect()->route('profile.picture')->with('success_created', 'Information uploaded successfully.');
    }

    public function render()
    {
        return view('livewire.profile.upload-author-info');
    }
}