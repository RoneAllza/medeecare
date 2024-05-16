<?php
// app/Http/Controllers/DiabetesTestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiabetesTestController extends Controller
{
    public function show()
    {
        return view('diabetes-test.show');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'glucose_level' => 'required|numeric',
        ]);

        $glucoseLevel = $request->input('glucose_level');
        $riskResult = $glucoseLevel > 120 ? 'Tinggi' : 'Rendah';

        // Hitung skor risiko
        $riskScore = $this->calculateRiskScore($glucoseLevel);

        // Simpan hasil tes diabetes dan skor risiko ke dalam tabel users
        $user = Auth::user();
        $user->diabetes_risk = $riskResult;
        $user->risk_level = $riskScore;
        $user->save();

        return redirect()->route('diabetes-test.show')->with('status', 'Hasil tes diabetes berhasil dihitung dan disimpan.');
    }

    private function calculateRiskScore($glucoseLevel)
    {
        // Hitung skor risiko berdasarkan tingkat glukosa
        if ($glucoseLevel <= 80) {
            return 10;
        } elseif ($glucoseLevel <= 100) {
            return 20;
        } elseif ($glucoseLevel <= 120) {
            return 30;
        } elseif ($glucoseLevel <= 140) {
            return 40;
        } elseif ($glucoseLevel <= 160) {
            return 50;
        } else {
            return 60;
        }
    }
}
