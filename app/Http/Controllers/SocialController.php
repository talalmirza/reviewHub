<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function login()
    {
        return Socialite::driver('facebook')
            ->fields([
                'first_name', 'last_name', 'email', 'gender', 'birthday'
            ])->scopes([
                'email', 'user_birthday'
            ])->redirect();
    }

    public function register()
    {

        $user = $this->loginOrCreateUser(Socialite::driver('facebook')->stateless()->user());
        Auth::login($user, true);
        return redirect('/home');
    }

    public function glogin()
    {
        return Socialite::driver('google')
           ->redirect();
    }

    public function gregister()
    {
        $user = $this->loginOrCreateUser(Socialite::driver('google')->user());
        Auth::login($user, true);
        return redirect('/home');
    }

    private function loginOrCreateUser($user)
    {

        if ($authUser = Member::where('email', $user->email)->first()) {
            return $authUser;
        }
//        dd($user->getBirthday);
        return Member::create([
            'email' => $user->email,
        ]);
    }
}
