<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewAny(User $user)
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }
}
