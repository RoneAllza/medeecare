<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Indikasi Covid-19</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif; /* Set font to Arial or fallback to sans-serif */
            color: red; /* Set title color to red */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 style="color: #8B0C0C; text-align: center;">Hasil Tes</h1>
        <!-- Tampilkan saran atau rekomendasi berdasarkan skor disini -->
        <p style="font-family: Arial, sans-serif; color: black; text-align: center;"> <!-- Set font to Arial or fallback to sans-serif and set text color to black -->
            @if($covidLevel === 'Tinggi')
                Anda memiliki resiko terinfeksi Covid-19 yang tinggi. Segera konsultasikan ke dokter atau klinik terdekat.
            @elseif($covidLevel === 'Sedang')
                Anda memiliki resiko terinfeksi Covid-19. Anda mungkin perlu memperhatikan kesehatan dan membiasakan pola hidup sehat mulai Sekarang.
            @else
                Anda tidak memiliki resiko terinfeksi Covid-19. Tetap jaga pola hidup sehat dan konsultasikan ke dokter bila perlu.
            @endif
        </p>
    </div>
</body>
</html>