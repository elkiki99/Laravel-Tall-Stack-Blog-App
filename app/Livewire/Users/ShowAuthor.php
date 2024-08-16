<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class ShowAuthor extends Component
{
    public $user;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function removeAuthorRole()
    {   
        $this->user->update([
            'role' => 'user',
        ]);

        if($this->user->posts->count() > 0) {
            $this->user->posts()->update([
                'status' => 'draft',
                'author_id' => User::where('role', 'admin')->first()->id,
            ]);
        }

        $this->user->save();

        return redirect()->route('users.index')->with('author_role_removed', 'Author role deleted successfully for '.$this->user->name.'.');
    }
    
    public function render()
    {
        $user = $this->user;
        $posts = $this->user->posts()->where('status', 'published')->latest()->paginate(10);
        $likedPosts = $this->user->likes()->where('status', 'published')->latest()->paginate(10);

        return view('livewire.users.show-author', [
            'likedPosts' => $likedPosts,
            'posts' => $posts,
            'user' => $user
        ]);
    }
}
