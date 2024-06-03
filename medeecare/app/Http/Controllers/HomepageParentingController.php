<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageParentingController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-parenting');
}
}
