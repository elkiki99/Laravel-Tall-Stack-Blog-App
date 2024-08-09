<?php

// namespace App\Http\Controllers\Auth;

// use App\Models\User;
// use Illuminate\Support\Str;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Laravel\Socialite\Facades\Socialite;

// class GoogleSocialiteController extends Controller
// {
//     public function redirect() 
//     {   
//         return Socialite::driver('google')->redirect();
//     }

//     public function callback() 
//     {
//         try{
//             $user = Socialite::drive('google')->user();

//             $googleUser = User::updateOrCreate([
//                 'google_id' => $user->id
//             ], [
//                 'name' => $user->name,  
//                 'email' => $user->email,
//                 'nickname' => $user->nickname,
//                 'avatar' => $user->avatar,
//                 'google_token' => $user->token,
//                 'auth_type' => 'google',
//                 'password' => Hash::make(Str::random(10)),
//             ]);

//             Auth::login($googleUser);

//         }catch(\Exception $e){
//             $e->getMessage();
//         }
//     }
// }
