<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesKecemasan\PertanyaanKecemasan;
use App\Models\TesKecemasan\HasilTesKecemasan;

class TesKecemasanController extends Controller
{
    public function index()
    {
        return view('tes_kecemasan.tes_kecemasan');
    }

    public function indexPertanyaan()
    {
        $pertanyaan = PertanyaanKecemasan::all();
        return view('tes_kecemasan.pertanyaan_kecemasan', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'jawaban' => 'required|array',
        ]);
    
        // Proses penyimpanan jawaban dan perhitungan skor tes
        $jawaban = $validatedData['jawaban'];
        $skor = array_sum($jawaban); // Contoh perhitungan skor, sesuaikan dengan kebutuhan
        $deskripsi = $this->getDeskripsiSkor($skor); // Contoh fungsi untuk mendapatkan deskripsi hasil berdasarkan skor
    
        // Simpan hasil tes ke database
        $hasilTes = HasilTesKecemasan::create([
            'skor_hasil' => $skor,
            'deskripsi_hasil' => $deskripsi,
            'jawaban' => json_encode($jawaban)
        ]);
    
        return redirect()->route('hasil-tes-kecemasan.index');
    }    


    public function showHasilTes()
    {
        $hasilTes = HasilTesKecemasan::all();
        return view('tes_kecemasan.hasil_kecemasan', compact('hasilTes'));
    }

    public function showDetailHasilTes($id)
    {
        $hasilTes = HasilTesKecemasan::findOrFail($id);
        return view('tes_kecemasan.lihat_hasil_kecemasan', compact('hasilTes'));
    }

    private function getDeskripsiSkor($skor)
    {
        if ($skor <= 5) {
            return 'Sedikit cemas';
        } elseif ($skor <= 10) {
            return 'Gangguan kecemasan ringan';
        } elseif ($skor <= 15) {
            return 'Gangguan kecemasan sedang';
        } else {
            return 'Gangguan kecemasan berat';
        }
    }

}
