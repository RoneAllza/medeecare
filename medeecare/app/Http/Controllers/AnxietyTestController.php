<?php

namespace App\Http\Controllers;

use App\Models\AnxietyTestResult;
use Illuminate\Http\Request;

class AnxietyTestController extends Controller
{
    public function showPsychologistsAndPsychiatrists()
    {
        // Ambil data psikolog dan psikiater dari database atau dapat juga dari model jika ada
        $psychologists = [
            [
                'name' => 'Dr. Psikolog A',
                'specialization' => 'Spesialis Kesehatan Mental',
                'image' => 'psikolog.jpg',
            ],
            // Tambahkan data psikolog lainnya sesuai kebutuhan
        ];

        $psychiatrists = [
            [
                'name' => 'Dr. Psikiater B',
                'specialization' => 'Spesialis Kesehatan Jiwa',
                'image' => 'psikiater.jpg',
            ],
            // Tambahkan data psikiater lainnya sesuai kebutuhan
        ];

        // Tampilkan view dengan data psikolog dan psikiater
        return view('anxiety_test.Cek_Kesehatan', compact('psychologists', 'psychiatrists'));
    }

    public function showForm()
    {
        return view('anxiety_test.form');
    }

    public function submitTest(Request $request)
    {
        // Proses penghitungan skor dan penyimpanan ke database
        $score = $this->calculateScore($request->all());
        $result = AnxietyTestResult::create([
            'user_id' => auth()->id(),
            'score' => $score,
        ]);

        return redirect()->route('anxiety.result', $result->id);
    }

    private function calculateScore($answers)
    {
        // Proses perhitungan skor berdasarkan jawaban
        $score = 0;
        // Implementasi logika perhitungan skor dari jawaban tes disini
        return $score;
    }

    public function showResult($id)
    {
        $result = AnxietyTestResult::findOrFail($id);
        return view('anxiety_test.result', compact('result'));
    }
}

