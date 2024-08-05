<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class TagPolicy
{
    public function viewAny(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }
    
    public function create(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  

    public function edit(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  

    public function delete(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  
}
