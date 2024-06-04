<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesDepresi\PertanyaanDepresi;
use App\Models\TesDepresi\HasilTesDepresi;

class TesDepresiController extends Controller
{
    public function index()
    {
        return view('tes_depresi.tes_depresi');
    }

    public function indexPertanyaan()
    {
        $pertanyaan = PertanyaanDepresi::all();
        return view('tes_depresi.pertanyaan_depresi', compact('pertanyaan'));
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
        $hasilTes = HasilTesDepresi::create([
            'skor_hasil' => $skor,
            'deskripsi_hasil' => $deskripsi,
            'jawaban' => json_encode($jawaban)
        ]);
    
        return redirect()->route('hasil-tes-depresi.index');
    }    


    public function showHasilTes()
    {
        $hasilTes = HasilTesDepresi::all();
        return view('tes_depresi.hasil_depresi', compact('hasilTes'));
    }

    public function showDetailHasilTes($id)
    {
        $hasilTes = HasilTesDepresi::findOrFail($id);
        return view('tes_depresi.lihat_hasil_depresi', compact('hasilTes'));
    }

    private function getDeskripsiSkor($skor)
    {
        if ($skor <= 5) {
            return 'Tidak depresi';
        } elseif ($skor <= 10) {
            return 'Depresi ringan';
        } elseif ($skor <= 15) {
            return 'Depresi sedang';
        } else {
            return 'Depresi berat';
        }
    }

}
