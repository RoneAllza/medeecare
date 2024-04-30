<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class KesehatanMentalController extends Controller
{
    function index(){
        $dokter = Dokter::all();
        return view('kesehatanmental', compact('dokter'));
    }

    function show($id){
        $dokter_detail = Dokter::findOrFail($id);
        return view('front.artikel_detail', compact('dokter_detail'));
    }

    function search(Request $request)
    {
        if ($request->has('search')) {
            $query = $request->input('search');
            $dokter = Dokter::where('nama', 'like', '%'.$query.'%')->get(); // Assuming 'nama' is the correct column name for doctor's name
        } else {
            $dokter = Dokter::all();
        }
        
        return view('kesehatanmental', compact('dokter'));
    }
}

