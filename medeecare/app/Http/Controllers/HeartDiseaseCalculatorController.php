<?php
// app/Http/Controllers/HeartDiseaseCalculatorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HeartDiseaseCalculatorController extends Controller
{
    public function showCalculator()
    {
        return view('heart-disease-calculator.form');
    }

    public function calculateRisk(Request $request)
    {
        // Validasi input
        $request->validate([
            'age' => 'required|numeric|min:1',
            'smoking' => 'required|boolean',
            'family_history' => 'required|boolean',
            'blood_pressure' => 'required|numeric|min:0',
        ]);

        // Ambil data dari request
        $age = $request->input('age');
        $smoking = $request->input('smoking');
        $family_history = $request->input('family_history');
        $blood_pressure = $request->input('blood_pressure');

        // Contoh logika kalkulasi risiko
        $riskScore = $this->calculateRiskScore($age, $smoking, $family_history, $blood_pressure);
        $riskLevel = $this->determineRiskLevel($riskScore);

        // Simpan risk_level ke pengguna yang sedang login
        $user = Auth::user(); // Pastikan Anda mendapatkan instance User yang sedang login
        $user->risk_level = $riskLevel;
        $user->save();

        return view('heart-disease-calculator.result', ['riskScore' => $riskScore]);
    }

    private function calculateRiskScore($age, $smoking, $family_history, $blood_pressure)
    {
        // Contoh sederhana perhitungan risiko
        $score = $age * 0.1 + $smoking * 10 + $family_history * 10 + $blood_pressure * 0.05;
        return $score;
    }

    private function determineRiskLevel($score)
    {
        if ($score < 10) {
            return 'Rendah';
        } elseif ($score < 20) {
            return 'Normal';
        } elseif ($score < 30) {
            return 'Tinggi';
        } else {
            return 'Sangat Tinggi';
        }
    }
}
