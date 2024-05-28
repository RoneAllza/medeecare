<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Obat;

class RekomendasiObatController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::latest()->get();
        return view('penyakit.index', compact('penyakit'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        Penyakit::create($request->all());
        return redirect()->route('penyakit');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $penyakit = Penyakit::find($id);
        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, string $id)
    {
        $penyakit = Penyakit::find($id);
        $penyakit->update($request->all());
        return redirect()->route('penyakit');
    }

    public function destroy(string $id)
    {
        $penyakit = Penyakit::find($id);
        if (!$penyakit) {
            return redirect()->back();
        }
        $penyakit->delete();
        return redirect()->route('penyakit');
    }

    public function rekomendasiobat(Request $request)
    {
        $query = $request->input('search', '');
        $obatPenyakit = Obat::query();

        if ($query) {
            $obatPenyakit = $obatPenyakit->where('nama_obat', 'like', '%' . $query . '%')
                ->orWhereHas('penyakit', function ($queryBuilder) use ($query) {
                    $queryBuilder->where('nama_penyakit', 'like', '%' . $query . '%');
                });
        }

        $obatPenyakit = $obatPenyakit->with('penyakit')->get()->groupBy('penyakit_id');
        $penyakitList = Penyakit::all();

        return view('rekomendasiobat', compact('obatPenyakit', 'penyakitList'));
    }
    // public function kategori(Penyakit $penyakit)
    // {
    //     $penyakitList = Penyakit::all();
    //     $artikel = $penyakit->artikel()->orderBy('created_at', 'desc')->get();
    //     $artikelall = $penyakit->artikel()->get();
    //     $artikelterkait = $penyakit->artikel()->orderBy('created_at', 'desc')->limit(4)->get();

    //     return view('informasipenyakit', compact('penyakitList', 'artikel', 'artikelall', 'artikelterkait'));
    // }
}
