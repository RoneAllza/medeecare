<?php

// app/Http/Controllers/HeartDiseaseRiskController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeartDiseaseRiskController extends Controller
{
    public function showForm()
    {
        return view('heart-disease-risk.form');
    }

    public function calculateRisk(Request $request)
    {
        $request->validate([
            'bmi' => 'required|numeric|min:0',
        ]);

        $bmi = $request->input('bmi');

        // Contoh logika perhitungan risiko
        $riskLevel = $this->determineRiskLevel($bmi);

        // Menyimpan risk_level ke dalam model User
        $user = Auth::user();
        $user->risk_level = $riskLevel;
        $user->save();

        return view('heart-disease-risk.result', ['riskLevel' => $riskLevel]);
    }

    private function determineRiskLevel($bmi)
    {
        if ($bmi < 18.5) {
            return 'Rendah';
        } elseif ($bmi < 24.9) {
            return 'Normal';
        } elseif ($bmi < 29.9) {
            return 'Tinggi';
        } else {
            return 'Sangat Tinggi';
        }
    }
}
