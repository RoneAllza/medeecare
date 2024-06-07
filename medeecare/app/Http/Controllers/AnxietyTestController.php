<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnxietyTestController extends Controller
{
    // Menampilkan form tes kecemasan
    public function showForm()
    {
        return view('anxiety_test.form');
    }

    // Menghitung skor berdasarkan jawaban tes
    public function submitTest(Request $request)
    {
        // Validasi bahwa semua pertanyaan telah dijawab
        $validatedData = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            // Tambahkan validasi untuk pertanyaan tambahan jika ada
        ], [
            'required' => 'Semua pertanyaan harus dijawab.'
        ]);

        // Proses penghitungan skor
        $score = $this->calculateScore($validatedData);
        
        // Tentukan tingkat kecemasan berdasarkan skor
        $anxietyLevel = $this->determineAnxietyLevel($score);

        // Redirect ke halaman hasil tes dengan menyertakan skor dan tingkat kecemasan
        return redirect()->route('anxiety.result', ['score' => $score, 'anxiety_level' => $anxietyLevel]);
    }

    // Fungsi untuk menghitung skor berdasarkan jawaban
    public function calculateScore($answers)
    {
        // Inisialisasi skor awal
        $score = 0;
        
        // Tabel bobot skor untuk setiap pilihan jawaban
        $scoreTable = [
            '0' => 0, // Tidak Pernah
            '1' => 1, // Beberapa Hari
            '2' => 2, // Sebagian Besar Hari
            '3' => 3, // Hampir Setiap Hari
        ];
        
        // Lakukan perhitungan skor berdasarkan jawaban yang diberikan
        foreach ($answers as $answer) {
            // Pastikan jawaban valid
            if (isset($scoreTable[$answer])) {
                // Tambahkan skor sesuai dengan pilihan jawaban
                $score += $scoreTable[$answer];
            }
        }

        return $score;
    }

    // Fungsi untuk menentukan tingkat kecemasan berdasarkan skor
    private function determineAnxietyLevel($score)
    {
        if ($score >= 15) {
            return 'Tinggi';
        } elseif ($score >= 8) {
            return 'Sedang';
        } else {
            return 'Rendah';
        }
    }

    // Menampilkan hasil tes kecemasan berdasarkan skor
    public function showResult(Request $request)
    {
        // Ambil skor dari request dan hitung tingkat kecemasan berdasarkan skor tersebut
        $score = $request->query('score');
        $anxietyLevel = $request->query('anxiety_level'); // Pastikan anxiety_level diambil dari query string

        // Log untuk debugging
        \Log::info('Score: ' . $score);
        \Log::info('Anxiety Level: ' . $anxietyLevel);

        // Tampilkan view hasil tes dengan skor dan tingkat kecemasan yang diberikan
        return view('anxiety_test.result', compact('score', 'anxietyLevel'));
    }
}
