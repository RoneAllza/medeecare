<?php
// app/Http/Controllers/MedicationRecommendationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asumsi data pengguna disimpan dalam model User

class MedicationRecommendationController extends Controller
{
    public function showRecommendations(Request $request)
    {
        $user = $request->user(); // Mengambil pengguna yang sudah login

        // Asumsi bahwa data risiko penyakit jantung disimpan dalam kolom risk_level pada model User
        $riskLevel = $user->risk_level;

        if (!$riskLevel) {
            return redirect('/heart-disease-risk')->with('error', 'Silakan hitung risiko penyakit jantung Anda terlebih dahulu.');
        }

        // Logika untuk merekomendasikan obat-obatan berdasarkan tingkat risiko
        $recommendations = $this->getMedicationRecommendations($riskLevel);

        return view('medication-recommendation.index', ['recommendations' => $recommendations]);
    }

    private function getMedicationRecommendations($riskLevel)
    {
        // Contoh logika rekomendasi obat-obatan berdasarkan tingkat risiko
        $medications = [
            'Rendah' => [
                'Aspirin: Digunakan untuk mengurangi risiko serangan jantung dengan mencegah pembekuan darah.', 
                'Atorvastatin (Lipitor): Sebuah statin yang digunakan untuk menurunkan kolesterol dan mengurangi risiko penyakit jantung.'
            ],
            'Normal' => [
                'Clopidogrel (Plavix): Digunakan untuk mencegah stroke, serangan jantung, dan masalah jantung lainnya dengan mencegah pembekuan darah.', 
                'Bisoprolol: Beta-blocker yang digunakan untuk mengobati hipertensi dan mengurangi risiko kejadian kardiovaskular.'
            ],
            'Tinggi' => [
                'Lisinopril: ACE inhibitor yang digunakan untuk mengobati tekanan darah tinggi dan gagal jantung.', 
                'Metoprolol (Lopressor, Toprol-XL): Beta-blocker yang digunakan untuk mengobati angina (nyeri dada) dan hipertensi, serta untuk meningkatkan kelangsungan hidup setelah serangan jantung.'
            ],
            'Sangat Tinggi' => [
                'Warfarin (Coumadin): Antikoagulan yang digunakan untuk mengurangi pembentukan bekuan darah dan mencegah stroke dan serangan jantung pada pasien dengan fibrilasi atrium atau penyakit katup jantung.', 
                'Amiodarone (Cordarone): Digunakan untuk mengobati dan mencegah berbagai jenis aritmia jantung.'
            ],
        ];        

        return $medications[$riskLevel] ?? [];
    }
}
