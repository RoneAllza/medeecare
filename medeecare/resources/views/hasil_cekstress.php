<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cek Stress</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Hasil Cek Stress</h2>
        <?php
        // Ambil nilai dari setiap pertanyaan
        $question1 = $_POST['question1'] ?? '';
        $question2 = $_POST['question2'] ?? '';
        $question3 = $_POST['question3'] ?? '';
        $question4 = $_POST['question4'] ?? '';
        $question5 = $_POST['question5'] ?? '';
        $question6 = $_POST['question6'] ?? '';
        $question7 = $_POST['question7'] ?? '';
        $question8 = $_POST['question8'] ?? '';
        $question9 = $_POST['question9'] ?? '';
        $question10 = $_POST['question10'] ?? '';

        // Fungsi untuk mengonversi jawaban menjadi nilai numerik
        function convertToNumeric($answer) {
            switch ($answer) {
                case 'Tidak Pernah':
                    return 0;
                case 'Jarang':
                    return 1;
                case 'Kadang-Kadang':
                    return 2;
                case 'Cukup Sering':
                    return 3;
                case 'Sangat Sering':
                    return 4;
                default:
                    return 0;
            }
        }

        // Hitung total skor
        $total_score = convertToNumeric($question1) +
                      convertToNumeric($question2) +
                      convertToNumeric($question3) +
                      convertToNumeric($question4) +
                      convertToNumeric($question5) +
                      convertToNumeric($question6) +
                      convertToNumeric($question7) +
                      convertToNumeric($question8) +
                      convertToNumeric($question9) +
                      convertToNumeric($question10);

        // Tentukan tingkat stres
        if ($total_score <= 20) {
            $stress_level = 'Rendah';
        } elseif ($total_score <= 30) {
            $stress_level = 'Sedang';
        } else {
            $stress_level = 'Tinggi';
        }

        // Tampilkan hasil
        echo "<p>Total skor: $total_score</p>";
        echo "<p>Tingkat stres: $stress_level</p>";
        ?>
    </div>
</body>
</html>
