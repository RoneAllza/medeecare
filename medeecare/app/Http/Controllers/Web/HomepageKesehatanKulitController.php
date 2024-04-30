<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageKesehatanKulitController extends Controller
{
    public function viewHomepageKesehatanKulit(){
        return view ('/CekKesehatanKulit/HomepageKesehatanKulit');
    }

}
