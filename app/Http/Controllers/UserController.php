<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

// controller yang menangani user auth

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        Log::debug($credentials);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::debug('Login Success');

            return redirect()->intended('/');
        }
        
        Log::error('Login Failed');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Log::debug('Logout');
        return redirect('/');
    }
}
