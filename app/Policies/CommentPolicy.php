<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    public function viewAny(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }
}
