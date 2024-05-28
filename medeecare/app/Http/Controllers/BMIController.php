<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BMIController extends Controller
{
    public function bmi()
    {
        $user = Auth::user();
        $bb = $user->bb;
        $tb = $user->tb;
        return view('bmi', compact('bb', 'tb'));
    }

    public function bmi_result(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'tb' => 'required|numeric|min:1|digits_between:3,4',
            'bb' => 'required|numeric|min:1|digits_between:2,3'
        ]);

        $gender = $request->input('gender');
        $tb = $request->input('tb');
        $bb = $request->input('bb');

        $tbInMeters = $tb / 100;
        $bmi = $bb / ($tbInMeters * $tbInMeters);

        $category = $this->getBmiCategory($bmi, $gender);

        return view('bmi_result', compact('bb', 'tb', 'bmi', 'category'));
    }

    private function getBmiCategory($bmi, $gender)
    {
        if ($gender == 'Laki-laki') {
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 25) {
                return 'Normal';
            } elseif ($bmi >= 25 && $bmi < 30) {
                return 'Gemuk';
            } else {
                return 'Obesitas';
            }
        } else {
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 24) {
                return 'Normal';
            } elseif ($bmi >= 24 && $bmi < 29) {
                return 'Gemuk';
            } else {
                return 'Obesitas';
            }
        }
    }
}
