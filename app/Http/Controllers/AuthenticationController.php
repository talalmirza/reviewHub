<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthenticationController extends Controller
{

    public function login(Request $request)
    {

        if ($request->isMethod('POST')) {
            $email = $request->input('email');
            $password = $request->input('password');

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            if ($validator->passes()) {
                if (Auth::attempt(['email' => $email, 'password' => $password])) {
                    /*if (!Auth::user()->user_verified) {
                        Auth::logout();
                        session()->flash('status', 'You are not verified. First verify your email!');
                        return redirect('/login');
                    }*/
                    return redirect('/home');
                } else {
                    session()->flash('status', 'Incorrect Credentials!');
                    return redirect('/');
                }
            } else {
                if (session()->has('type')) {
                    session()->flush('type');
                }
                session(['type' => 'login']);
                return redirect('/')
                    ->withErrors($validator->errors())->with('type', 'login');
            }
        }
    }

    public function register(Request $req)
    {

        $email = $req->input('email');
        $password = bcrypt($req->input('password'));
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'username' => 'required|unique:members',
            'password' => 'required|min:6',
        ]);
        if ($validator->passes()) {
            $user = Member::create([
                'email' => $email,
                'password' => $password,
                'date_of_birth' => $req->dob,
                'username' => $req->username,
                'profile_url' => $req->username,
            ]);
            Auth::login($user);
            return redirect('/home');
        } else {

            if (session()->has('type')) {
                session()->flush('type');
            }
            session(['type' => 'reg']);
            return redirect('/')->withErrors($validator->errors());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
