<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArtikelKulitController;

use Illuminate\Http\Request;

class HomepageKesehatanKulitController extends Controller
{
    public function viewHomepageKesehatanKulit(){
        return view ('/CekKesehatanKulit/HomepageKesehatanKulit');
    }

    public function viewArtikel(){
        return view ('/CekKesehatanKulit/Artikel');
    }

    public function viewObatKulit(){
        return view ('/CekKesehatanKulit/ObatKulit');
    }

}
