<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

// controller yang akan menangani semua front end view

class WelcomeController extends Controller
{

    public function welcome(Request $r)
    {
        $user = Auth::user();
        Log::debug($user);

        return view('welcome', [
            'user' => $user
        ]);
    }

    public function login(Request $r)
    {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }
}
