<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleCovidController extends Controller
{
    public function FuncArticleCovid(){
        return view ('Test-Covid.ArticleCovid');
    }

}
