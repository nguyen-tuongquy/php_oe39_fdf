<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role_id = 0;
        if ($user->save()) {
            return redirect()->route('auth.showLoginForm');
        }
        
        return redirect()->route('auth.showRegisterForm');
    }
}
