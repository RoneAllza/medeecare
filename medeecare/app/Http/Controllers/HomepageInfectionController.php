<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageInfectionController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-infection');
}
}
