<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\obat;
use App\Models\penyakit;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::latest()->get();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penyakit = Penyakit::select('id', 'nama_penyakit')->get();
        return view('obat.create', compact('penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'penyakit_id' => 'required|exists:penyakit,id',
        ]);

        $image = $request->file('gambar')->store('obat');
        Obat::create([
            'nama_obat' => $validatedData['nama_obat'],
            'deskripsi' => $validatedData['deskripsi'],
            'gambar' => $image,
            'penyakit_id' => $validatedData['penyakit_id'],
        ]);

        return redirect()->route('obat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Method ini bisa dikosongkan jika tidak digunakan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penyakit = Penyakit::select('id', 'nama_penyakit')->get();
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('penyakit', 'obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'penyakit_id' => 'required|exists:penyakit,id',
        ]);

        $obat = Obat::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::delete($obat->gambar);
            $image = $request->file('gambar')->store('obat');
            $obat->gambar = $image;
        }

        $obat->update([
            'nama_obat' => $validatedData['nama_obat'],
            'deskripsi' => $validatedData['deskripsi'],
            'penyakit_id' => $validatedData['penyakit_id'],
        ]);

        return redirect()->route('obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::findOrFail($id);

        // Periksa apakah file gambar ada
        if (Storage::exists($obat->gambar)) {
            // Hapus gambar
            Storage::delete($obat->gambar);
        }

        // Hapus obat dari database
        $obat->delete();

        return redirect()->route('obat');
    }
}