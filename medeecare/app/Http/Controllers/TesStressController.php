<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesStress\PertanyaanStress;
use App\Models\TesStress\HasilTesStress;

class TesStressController extends Controller
{
    public function index()
    {
        return view('tes_stress.tes_stress');
    }

    public function indexPertanyaan()
    {
        $pertanyaan = PertanyaanStress::all();
        return view('tes_stress.pertanyaan_stress', compact('pertanyaan'));
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
        $hasilTes = HasilTesStress::create([
            'skor_hasil' => $skor,
            'deskripsi_hasil' => $deskripsi,
            'jawaban' => json_encode($jawaban)
        ]);
    
        return redirect()->route('hasil-tes-stress.index');
    }    


    public function showHasilTes()
    {
        $hasilTes = HasilTesStress::all();
        return view('tes_stress.hasil_stress', compact('hasilTes'));
    }

    public function showDetailHasilTes($id)
    {
        $hasilTes = HasilTesStress::findOrFail($id);
        return view('tes_stress.lihat_hasil_stress', compact('hasilTes'));
    }

    private function getDeskripsiSkor($skor)
    {
        if ($skor <= 10) {
            return 'Tidak stress';
        } elseif ($skor <= 20) {
            return 'Stress ringan';
        } elseif ($skor <= 30) {
            return 'Stress sedang';
        } else {
            return 'Stress berat';
        }
    }

}
