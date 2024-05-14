<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilTesKecemasan;
use App\Models\PertanyaanKecemasan;

class TesKecemasanController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama tes kecemasan
        return view('tes_kecemasan');
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
            $opsiJawaban = new OpsiJawabanKecemasan();
            $opsiJawaban->id_pertanyaan_kecemasan = $key;
            $opsiJawaban->jawaban_kecemasan = $value;
            $opsiJawaban->save();
        }

        // Redirect ke halaman hasil tes
        return redirect()->route('tes-kecemasan.lihat-hasil', ['id' => $hasilTesId, 'jawaban' => $jawaban]);
    }


    // Controller method
    public function lihatHasil($id)
    {
        // Mengambil data hasil tes berdasarkan ID
        $hasilTes = HasilTesKecemasan::findOrFail($id);

        // Mengambil jawaban kecemasan terkait hasil tes
        $jawabanKecemasan = OpsiJawabanKecemasan::where('hasil_tes_id', $id)->get();

        // Membuat array jawaban
        $jawaban = [];
        foreach ($jawabanKecemasan as $jawabanItem) {
            $jawaban['jawaban' . $jawabanItem->id_pertanyaan_kecemasan] = [
                'jawaban' => $jawabanItem->jawaban_kecemasan,
                'skor' => $jawabanItem->skor
            ];
        }

        return view('lihat_hasil_kecemasan', compact('jawaban'));
    }

}
