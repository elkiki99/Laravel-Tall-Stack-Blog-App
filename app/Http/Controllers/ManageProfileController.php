<?php

namespace App\Http\Controllers;

class ManageProfileController extends Controller
{
    public function picture()
    {   
        $user = auth()->user();

        return view('profile.manage', [
            'user' => $user
        ]);
    }
}
