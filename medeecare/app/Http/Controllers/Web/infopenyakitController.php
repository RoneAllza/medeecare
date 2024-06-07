<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Artikel;
use Illuminate\Http\Request;

class infopenyakitController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search', '');
        $Category = Category::all();
        $artikel = Artikel::query();
    
        if ($query) {
            $artikel = $artikel->where('judul', 'like', '%' . $query . '%');
        }
    
        $artikel = $artikel->get();

        if ($artikel->isEmpty()) {
            return view('informasipenyakit', compact('artikel', 'Category'))->with('error', 'Artikel tidak ditemukan untuk kata kunci: ' . $query);
        } else {
            $artikelall = Artikel::orderBy('created_at', 'desc')->get();
            $artikelterkait = Artikel::orderBy('created_at', 'desc')->limit(4)->get();
        
            return view('informasipenyakit', compact('artikel', 'Category', 'artikelall', 'artikelterkait'));
        }
    }

    function show($id){
        $artikel_detail = Artikel::findOrFail($id);
        $category=Category::all();
        return view('front.artikel_detail', compact('artikel_detail','category'));
    }

    public function kategori(Category $category){
        $Category=Category::all();
        $artikel = $category->artikel()->orderBy('created_at', 'desc')->get();
        $artikelall=$category->Artikel()->get();
        $artikelterkait = $category->artikel()->orderBy('created_at', 'desc')->limit(4)->get();

        return view('informasipenyakit', compact('Category','artikel','artikelall','artikelterkait'));
    }
    
}

