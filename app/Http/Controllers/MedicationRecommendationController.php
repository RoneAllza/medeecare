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
            'Rendah' => ['Obat A', 'Obat B'],
            'Normal' => ['Obat C', 'Obat D'],
            'Tinggi' => ['Obat E', 'Obat F'],
            'Sangat Tinggi' => ['Obat G', 'Obat H'],
        ];

        return $medications[$riskLevel] ?? [];
    }
}
