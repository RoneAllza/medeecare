<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Artikel;
use Illuminate\Http\Request;

class infopenyakitController extends Controller
{
    function index(){
        $category=Category::all();
        $artikel=Artikel::latest()->get()->random(2);
        $artikelall=Artikel::latest()->get();
        $artikelterkait=Artikel::latest()->limit(4)->get();
        return view('informasipenyakit',compact('category','artikel','artikelall','artikelterkait'));
    }

    function show($id){
        $artikel_detail = Artikel::findOrFail($id);
        $category=Category::all();
        return view('front.artikel_detail', compact('artikel_detail','category'));
    }
    
}
