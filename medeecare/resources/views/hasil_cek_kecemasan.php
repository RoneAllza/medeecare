<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cek Kecemasan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Hasil Cek Kecemasan</h2>
        <?php
        // Ambil nilai dari setiap pertanyaan
        $answers = $_POST['answers'] ?? [];

        // Hitung total skor cek kecemasan
        $total_score = array_sum($answers);

        // Tentukan tingkat kecemasan
        if ($total_score <= 10) {
            $anxiety_level = 'Rendah';
        } elseif ($total_score <= 20) {
            $anxiety_level = 'Sedang';
        } else {
            $anxiety_level = 'Tinggi';
        }

        // Tampilkan hasil
        echo "<p>Total skor: $total_score</p>";
        echo "<p>Tingkat kecemasan: $anxiety_level</p>";
        ?>
    </div>
</body>
</html>
