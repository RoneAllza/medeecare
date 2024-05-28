<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilTesDepresi;
use App\Models\PertanyaanDepresi;

class TesDepresiController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama tes Depresi
        return view('tes_depresi');
    }

    public function simpanHasil(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            // Definisikan aturan validasi jika diperlukan
        ]);

        // Ambil ID hasil tes dari input hidden
        $hasilTesId = $request->input('hasil_tes_id');

        // Ambil semua jawaban dari request
        $jawaban = $request->except('_token', 'hasil_tes_id');

        // Simpan hasil jawaban ke dalam database
        foreach ($jawaban as $key => $value) {
            $opsiJawaban = new OpsiJawabanDepresi();
            $opsiJawaban->id_pertanyaan_depresi = $key;
            $opsiJawaban->jawaban_depresi = $value;
            $opsiJawaban->save();
        }

        // Redirect ke halaman hasil tes
        return redirect()->route('tes-depresi.lihat-hasil', ['id' => $hasilTesId, 'jawaban' => $jawaban]);
    }


    // Controller method
    public function lihatHasil($id)
    {
        // Mengambil data hasil tes berdasarkan ID
        $hasilTes = HasilTesDepresi::findOrFail($id);

        // Mengambil jawaban Depresi terkait hasil tes
        $jawabanDepresi = OpsiJawabanDepresi::where('hasil_tes_id', $id)->get();

        // Membuat array jawaban
        $jawaban = [];
        foreach ($jawabanDepresi as $jawabanItem) {
            $jawaban['jawaban' . $jawabanItem->id_pertanyaan_depresi] = [
                'jawaban' => $jawabanItem->jawaban_depresi,
                'skor' => $jawabanItem->skor
            ];
        }

        return view('lihat_hasil_depresi', compact('jawaban'));
    }

}

