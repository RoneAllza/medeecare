<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function registrasi()
    {
 
    }

    public function informasipenyakit()
    {
      return view('informasipenyakit');
    }
}