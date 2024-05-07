<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilTesKecemasan;
use App\PertanyaanKecemasan;


class TesKecemasanController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama tes kecemasan
        return view('tes_kecemasan');
    }
    public function pertanyaan()
    {
        $pertanyaan = PertanyaanKecemasan::all();
        return view('pertanyaan_kecemasan', compact('pertanyaan'));
    }

    public function simpanHasil(Request $request)
    {
        // Validasi data
        $request->validate([
            // Definisikan aturan validasi jika diperlukan

        ]);

        // Hitung skor berdasarkan jawaban
        $skor = 0;
        $jawaban = $request->except('_token');
        foreach ($jawaban as $key => $value) {
            $skor += intval($value);
        }

        // Tentukan range berdasarkan skor
        $range = '';
        if ($skor >= 0 && $skor <= 10) {
            $range = 'Ringan';
        } elseif ($skor > 10 && $skor <= 15) {
            $range = 'Sedang';
        } else {
            $range = 'Berat';
        }

        // Simpan hasil tes ke dalam database
        $hasilTes = new HasilTesKecemasan();
        $hasilTes->skor_hasil = $skor;
        $hasilTes->deskripsi_hasil = $range;
        $hasilTes->save();

        // Redirect ke halaman hasil tes
        return redirect()->route('hasil-tes-kecemasan', $hasilTes->id);
    }

    public function lihatHasil($id)
    {
        $hasilTes = HasilTesKecemasan::findOrFail($id);
        return view('lihat_hasil_kecemasan', compact('hasilTes'));
    }
}
