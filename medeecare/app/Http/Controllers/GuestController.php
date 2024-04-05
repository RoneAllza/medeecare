<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasipenyakit;

class GuestController extends Controller
{
    public function registrasi()
    {
 
    }

    public function informasipenyakit()
    {
      return view('informasipenyakit');
    }

    public function search(Request $request)
    {
        if ($request->has('search')){
            $informasipenyakit = Informasipenyakit::where('judul', 'like', '%' . $request->search . '%')->get();
        }
        else{
            $informasipenyakit = Informasipenyakit::all();
        }
        return view('informasipenyakit',['informasipenyakit' => $informasipenyakit]);
    }
}