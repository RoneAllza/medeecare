<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatKulitController extends Controller
{
    public function viewObatKulit(){
        return view ('/CekKesehatanKulit/ObatKulit');
    }

}
