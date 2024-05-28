<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormReservasiController extends Controller
{
    public function viewFormReservasi(){
        return view ('/ReservasiNomorAntrian/FormReservasi');
    }

}
