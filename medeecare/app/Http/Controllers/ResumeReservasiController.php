<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeReservasiController extends Controller
{
    public function viewResumeReservasi(){
        return view ('/ReservasiNomorAntrian/ResumeReservasi');
    }
}
