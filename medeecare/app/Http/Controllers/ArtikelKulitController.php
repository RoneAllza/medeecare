<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelKulitController extends Controller
{

    public function viewArtikel(){
        return view ('/CekKesehatanKulit/Artikel');
    }

}
