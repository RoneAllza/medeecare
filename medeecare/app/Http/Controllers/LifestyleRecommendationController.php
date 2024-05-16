<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LifestyleRecommendationController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if (!$user->risk_level) {
            return redirect()->route('diabetes-test.show')->with('error', 'Anda harus melakukan tes risiko diabetes terlebih dahulu.');
        }

        $recommendations = $this->getRecommendations($user->risk_level);

        return view('lifestyle-recommendation', compact('recommendations'));
    }

    private function getRecommendations($riskScore)
    {
        if ($riskScore < 20) {
            return 'Rekomendasi untuk risiko rendah: Konsumsi lebih banyak sayuran, buah-buahan, dan olahraga rutin.';
        } elseif ($riskScore < 50) {
            return 'Rekomendasi untuk risiko sedang: Batasi asupan gula, hindari makanan cepat saji, dan tingkatkan aktivitas fisik.';
        } else {
            return 'Rekomendasi untuk risiko tinggi: Konsultasikan dengan ahli gizi, lakukan pemeriksaan rutin, dan ikuti program diet yang ketat.';
        }
    }
}
