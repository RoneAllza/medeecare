<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageDiabetesController extends Controller
{
    public function viewHomepage(){
        return view ('/ForumDiskusiKesehatan/homepage-diabetes');
}
}
