<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiabetesPreventionController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if (!$user->risk_level) {
            return redirect()->route('diabetes-test.show')->with('error', 'Anda harus melakukan tes risiko diabetes terlebih dahulu.');
        }

        $preventionInfo = $this->getPreventionInfo($user->risk_level);

        return view('diabetes-prevention', compact('preventionInfo'));
    }

    private function getPreventionInfo($riskScore)
    {
        if ($riskScore < 20) {
            return 'Langkah pencegahan untuk risiko rendah: Jaga pola makan sehat, rutin berolahraga, dan hindari stres.';
        } elseif ($riskScore < 50) {
            return 'Langkah pencegahan untuk risiko sedang: Kurangi konsumsi gula, perbanyak asupan serat, dan periksa kesehatan secara berkala.';
        } else {
            return 'Langkah pencegahan untuk risiko tinggi: Konsultasikan dengan dokter, ikuti program diet ketat, dan lakukan pemeriksaan kesehatan rutin.';
        }
    }
}
