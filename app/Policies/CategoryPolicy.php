<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }
    
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  

    /**
     * Determine whether the user can update the model.
     */
    public function edit(User $user, Category $category): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Category $category): Response
    {
        return $user->role === 'admin'
                ? Response::allow()
                : Response::deny('You do not have the required permissions.');
    }  
}
