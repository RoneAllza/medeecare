<?php
// app/Http/Controllers/DiabetesRiskController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiabetesRiskController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if (!$user->diabetes_risk) {
            return redirect()->route('diabetes-test.show')->with('message', 'Silakan lakukan tes resiko diabetes terlebih dahulu.');
        }

        return view('diabetes-risk.show', ['diabetesRisk' => $user->diabetes_risk]);
    }
}
