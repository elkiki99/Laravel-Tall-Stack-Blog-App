<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function viewAny(User $user): Response
    {
        return ($user->role === 'admin' || $user->role === 'author')
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }

    public function view(?User $user, Post $post): Response
    {   
        if ($post->status === 'published') {
            return Response::allow();
        }

        if ($user) {
            if ($post->status === 'draft' && ($user->role === 'admin' || $user->id === $post->author_id)) {
                return Response::allow();
            }
        }
        return Response::deny('You do not have the required permissions.');

    }

    public function create(User $user): Response
    {
        return $user->role === 'admin' || $user->role === 'author'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }

    public function edit(User $user, Post $post): Response
    {
        return ($user->role === 'admin' || ($user->id === $post->author_id))
                ? Response::allow()
                : Response::deny('You do not own this post.');
    }

    public function delete(User $user): bool
    {
        return $user->role === 'admin';
    }
}
