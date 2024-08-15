<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $user;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function grantAuthorRole()
    {   
        $this->user->update([
            'role' => 'author',
        ]);

        $this->user->posts()->update([
            'status' => 'draft',
            'author_id' => User::where('role', 'admin')->first()->id,
        ]);

        $this->user->save();

        return redirect()->route('users.index')->with('author_role_granted', 'Author role granted successfully for '.$this->user->name.'.');
    }
    
    public function render()
    {
        $user = $this->user;
        $posts = $this->user->posts()->where('status', 'published')->latest()->paginate(10);

        return view('livewire.users.show-user', [
            'posts' => $posts,
            'user' => $user
        ]);
    }
}

