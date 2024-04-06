<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Artikel;
use App\Models\category;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel=Artikel::latest()->get();
        return view('Artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category=category::select('id','nama_kategori')->get();
        return view('Artikel.create',compact('Category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image=$request->file('gambar')->store('artikel');
        Artikel::create([
            'judul'=>Str::slug($request->judul),
            'body'=>$request->body,
            'gambar'=>$image,
            'categories_id'=>$request->categories_id
        ]);
        return redirect()->route('Artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::select('id','nama_kategori')->get();
        $artikel=Artikel::find($id);
        return view ('Artikel.edit',compact('category','artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artikel=Artikel::find($id);
        Storage::delete($artikel->gambar);
        $artikel->update([
            'judul'=>Str::slug($request->judul),
            'body'=>$request->body,
            'gambar'=>$request->file('gambar')->store('artikel'),
            'categories_id'=>$request->categories_id,
        ]);
        return redirect()->route('Artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::find($id);

        // Periksa apakah file gambar ada
        if (Storage::exists($artikel->gambar)) {
            // Hapus gambar
            Storage::delete($artikel->gambar);
        }

        // Hapus artikel dari database
        $artikel->delete();

        return redirect()->route('Artikel');
    }
}
