<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Artikel;
use Illuminate\Http\Request;

class infopenyakitController extends Controller
{
    function index(){
        $Category=Category::all();
        $artikel=Artikel::latest()->get()->random(2);
        $artikelall=Artikel::latest()->get();
        $artikelterkait=Artikel::latest()->limit(4)->get();
        return view('informasipenyakit',compact('Category','artikel','artikelall','artikelterkait'));
    }

    function show($id){
        $artikel_detail = Artikel::findOrFail($id);
        $category=Category::all();
        return view('front.artikel_detail', compact('artikel_detail','category'));
    }

    public function search(Request $request)
    {
    if ($request->has('search')) { // Periksa apakah ada input pencarian
        $query = $request->input('search');
        $artikel = Artikel::where('judul', 'like', '%'.$query.'%')->get();
    } else {
        $artikel = Artikel::all();
    }
    
    $Category = Category::all(); // Mengambil semua kategori
    $artikelall=Artikel::latest()->get();
    $artikelterkait=Artikel::latest()->limit(4)->get();
    
    return view('informasipenyakit', compact('artikel', 'request', 'Category', 'artikelall', 'artikelterkait'));
    }



   // public function kategori(category $category){
    //$category=Category::all();
    //$artikel=$category->Artikel()::latest()->get()->random(2);
    //$artikelall=$category->Artikel()->get();
    //$artikelterkait=$category->Artikel()::latest()->limit(4)->get();

    //return view('front', compact('category','artikel','artikelall','artikelterkait'));

    //}
    
}
