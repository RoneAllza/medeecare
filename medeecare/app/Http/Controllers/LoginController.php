<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class LoginController extends Controller
{
<<<<<<< Updated upstream:medeecare/app/Http/Controllers/LoginController.php
    public function login(){
        return view('auth.login');
=======
    public function homepage(){
        $features = Feature::where('name', 'like', '%cek%')->get();

        return view('home', compact('features'));
    }

    public function feature(){
        $features = Feature::all();

        return view('feature', compact('features'));
>>>>>>> Stashed changes:medeecare/app/Http/Controllers/UserController.php
    }
}
