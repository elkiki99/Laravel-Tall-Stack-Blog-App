<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GitHubSocialiteController extends Controller
{
    public function redirect() 
    {   
        return Socialite::driver('github')->redirect();
    }

    public function callback() 
    {
        try{
            $user = Socialite::drive('github')->user();

            $gitUser = User::updateOrCreate([
                'github_id' => $user->id
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'nickname' => $user->nickname,
                'avatar' => $user->avatar,
                'github_token' => $user->token,
                'auth_type' => 'github',
                'password' => Hash::make(Str::random(10)),
            ]);

            Auth::login($gitUser);

        }catch(\Exception $e){
            $e->getMessage();
        }
    }
}