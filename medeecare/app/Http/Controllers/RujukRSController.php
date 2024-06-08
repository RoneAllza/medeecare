<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RujukRSController extends Controller
{
    public function FuncRujukrs(){
        return view ('Rujukrs.formrujukan');
    }

    public function submitRujukan()
    {
        return view ('Rujukrs.submitform');
    }

    public function store(Request $request)
    {
    $request->validate([
        'Nama Lengkap' => 'required',
        'Email address' => 'required|email',
        'Riwayat Penyakit' => 'required',
        // tambahkan aturan validasi lainnya sesuai kebutuhan
    ]);

    // Logika untuk menyimpan data
    }

}
