<?php

namespace App\Http\Controllers;

use App\Models\User;    

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
    
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }
}
