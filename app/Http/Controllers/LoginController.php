<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Socialite;
use Hash;
use Str;
use Datetime;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }
    
    public function login(LoginRequest $request)
    {   
        $remember = $request->remember == 1 ? true : false; 
        $info = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($info, $remember)) {
            return redirect()->route('home');
        } else {
            $request->session()->flash('login-failed', trans('main.auth.login_failed'));
            return redirect()->route('auth.showLoginForm');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.showLoginForm');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $userInfo = Socialite::driver($provider)->user();
        
        $user = User::firstOrCreate(
        [
            'email' => $userInfo->email,
        ],
        
        [
            'fullname' => $userInfo->name,
            'username' => uniqid(rand(), true),
            'password' => Hash::make(Str::random(24)),
            'created_at' => new Datetime(),
        ]);

        Auth::login($user, true);

        return redirect('/');
    }
}
