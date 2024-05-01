<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartDiseaseRiskController extends Controller
{
    public function showForm()
    {
        return view('heart-disease-risk.form');
    }

    public function calculateRisk(Request $request)
    {
        // Validasi input BMI
        $request->validate([
            'bmi' => 'required|numeric|min:0',
        ]);

        $bmi = $request->input('bmi');

        // Lakukan penghitungan risiko penyakit jantung berdasarkan BMI
        // Misalnya, Anda dapat menggunakan rumus tertentu untuk ini

        $riskLevel = $this->calculateRiskLevel($bmi);

        return view('heart-disease-risk.result', ['riskLevel' => $riskLevel]);
    }

    private function calculateRiskLevel($bmi)
    {
        // Logika perhitungan risiko penyakit jantung
        // Misalnya, Anda dapat menetapkan kategori risiko berdasarkan kisaran BMI
        // Ini hanya contoh, sesuaikan dengan logika bisnis yang sesuai

        if ($bmi < 18.5) {
            return 'Rendah';
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            return 'Normal';
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            return 'Tinggi';
        } else {
            return 'Sangat Tinggi';
        }
    }
}