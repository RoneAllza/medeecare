<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_process(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  
            if (Auth::user()->role == 'Pasien'){
                return redirect('/');
            } elseif (Auth::user()->role == 'Admin'){
                return redirect('/admin');
            }

        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Email atau Password yang Anda masukan salah');
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
