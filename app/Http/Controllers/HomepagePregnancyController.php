<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagePregnancyController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-pregnancy');
}
}
