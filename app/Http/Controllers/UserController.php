<?php

namespace App\Http\Controllers;

use App\Models\User;    
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', User::class);
        return view('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
