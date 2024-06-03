<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;

class FormDiskusiController extends Controller
{
    public function viewForm()
    {
     return view('/ForumDiskusiKesehatan/FormDiskusiKesehatan');
   }
   
   public function submitForm(Request $request) {
   $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'komunitas' => 'required|string',
        'anonim' => 'nullable|boolean',
    ]);

    $diskusi = new Diskusi();
    $diskusi->judul = $request->judul;
    $diskusi->deskripsi = $request->deskripsi;
    $diskusi->komunitas = $request->komunitas;
    $diskusi->anonim = $request->anonim;

    $diskusi->save();

    return redirect()->route('formdiskusikesehatan.submitForm')->with('success', 'Diskusi berhasil diunggah!');
    } 

}
