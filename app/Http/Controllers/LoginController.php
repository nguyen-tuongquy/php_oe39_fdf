<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
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
}
