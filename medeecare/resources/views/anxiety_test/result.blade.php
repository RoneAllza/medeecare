<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Kesehatan Mental</title>
</head>
<body>
    <h1>Hasil Tes Kesehatan Mental</h1>
    <p>Skor Anda: {{ $result->score }}</p>
    <!-- Tampilkan saran atau rekomendasi berdasarkan skor disini -->
    @if($result->score >= 80)
        <p>Anda memiliki skor tinggi. Disarankan untuk berkonsultasi dengan profesional kesehatan mental.</p>
    @elseif($result->score >= 60)
        <p>Anda memiliki skor sedang. Anda mungkin perlu memperhatikan kesehatan mental Anda dan mencari dukungan jika diperlukan.</p>
    @else
        <p>Anda memiliki skor rendah. Tetap menjaga kesehatan mental Anda dengan melakukan aktivitas yang menyenangkan dan berkualitas.</p>
    @endif
</body>
</html>
