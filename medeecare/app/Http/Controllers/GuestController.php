<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasipenyakit;
use App\Models\User;


class GuestController extends Controller
{
    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function regis_proses(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // Buat user baru hanya dengan email dan password
    $user = User::create([
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Jika Anda masih ingin menggunakan dd() untuk debug, letakkan di bawah pembuatan pengguna
    dd($request->all());

    // Redirect ke halaman login atau halaman lain sesuai kebutuhan
    return redirect()->route('registrasi')->with('success', 'Akun berhasil didaftarkan');
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