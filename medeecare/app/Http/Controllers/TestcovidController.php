<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestCovidController extends Controller
{
    public function FuncTestCovid(){
        return view ('Test-Covid.TestCovid');
    }

    public function submitTestCovid(Request $request)
    {
        $score = $this->calculateScore($request->all());
        $covidLevel = $this->determineCovidLevel($score);
        return redirect()->route('TestCovid.ResultCovid', ['score' => $score, 'covid_level' => $covidLevel]);
    }

    public function calculateScore($answers)
    {
        // Inisialisasi skor awal
        $score = 0;
        
        // Tabel bobot skor untuk setiap pilihan jawaban
        $scoreTable = [
            'option1' => 0, // Tidak Pernah
            'option2' => 1, // Beberapa Hari
            'option3' => 2, // Sebagian Besar Hari
            'option4' => 3, // Hampir Setiap Hari
        ];
        
        // Lakukan perhitungan skor berdasarkan jawaban yang diberikan
        foreach ($answers as $answer) {
            // Pastikan jawaban valid
            if (isset($scoreTable[$answer])) {
                // Tambahkan skor sesuai dengan pilihan jawaban
                $score += $scoreTable[$answer];
            } else {
                // Penanganan jika jawaban tidak valid (opsional)
                // Anda dapat menambahkan logika penanganan jawaban yang tidak valid di sini
                $score += 0; // Set default score to 0 if answer is not valid
            }
        }

        return $score;
    }

    // Fungsi untuk menentukan tingkat kecemasan berdasarkan skor
    private function determineCovidLevel($score)
    {
        if ($score >= 10) {
            return 'Tinggi';
        } elseif ($score >= 5) {
            return 'Sedang';
        } else {
            return 'Rendah';
        }
    }

    // Menampilkan hasil tes kecemasan berdasarkan skor
    public function showResultCovid(Request $request)
    {
        // Ambil skor dan tingkat kecemasan dari request
        $score = $request->input('score');
        $covidLevel = $request->input('covid_level'); // Update to get anxiety_level from request

        // Tampilkan view hasil tes dengan skor dan tingkat kecemasan yang diberikan
        return view('Test-Covid.ResultCovid', compact('score', 'covidLevel'));
    }
}

