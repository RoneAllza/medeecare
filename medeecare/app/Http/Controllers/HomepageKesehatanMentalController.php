<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageKesehatanMentalController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-mental');
}

}
