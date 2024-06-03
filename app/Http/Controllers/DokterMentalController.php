<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Dokter;


class DokterMentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter=Dokter::latest()->get();
        return view('Dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokter=Dokter::select('id','dokter')->get();
        return view('Dokter.create',compact('dokter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image=$request->file('gambar')->store('dokter');
        Dokter::create([
            'dokter'=>$request->dokter,
            'body'=>$request->body,
            'gambar'=>$image,
        ]);
        return redirect()->route('Dokter');
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
        $dokter=Dokter::select('id','dokter')->get();
        $dokter=Dokter::find($id);
        return view ('Dokter.edit',compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dokter = Dokter::find($id);
        $image = $dokter->gambar; // Keep the old image as default

        if ($request->hasFile('gambar')) {
            Storage::delete($dokter->gambar); // Delete the old image
            $image = $request->file('gambar')->store('dokter'); // Store the new image
        }

        $dokter->update([
            'dokter' => $request->dokter,
            'body' => $request->body,
            'gambar' => $image,
        ]);

        return redirect()->route('Dokter');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::find($id);

        // Periksa apakah file gambar ada
        if (Storage::exists($dokter->gambar)) {
            // Hapus gambar
            Storage::delete($dokter->gambar);
        }

        // Hapus artikel dari database
        $dokter->delete();

        return redirect()->route('Dokter');
    }
}
