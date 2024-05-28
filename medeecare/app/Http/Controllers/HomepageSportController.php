<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageSportController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-sport');
}
}
