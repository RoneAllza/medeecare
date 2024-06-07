<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Kesehatan Mental</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
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
        .error {
            color: #FF0000; /* Red color for error messages */
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 style="color: #8B0C0C; text-align: center;">Hasil Tes Kesehatan Mental</h1>
        <h2 style="color: black; text-align: center;">Skor Anda: {{ $score }}</h2>
        <!-- Tampilkan saran atau rekomendasi berdasarkan skor disini -->
        <p style="font-family: Arial, sans-serif; color: black; text-align: center;"> <!-- Set font to Arial or fallback to sans-serif and set text color to black -->
            @if($anxietyLevel === 'Tinggi')
                Anda memiliki tingkat kecemasan tinggi. Disarankan untuk berkonsultasi dengan profesional kesehatan mental.
            @elseif($anxietyLevel === 'Sedang')
                Anda memiliki tingkat kecemasan sedang. Anda mungkin perlu memperhatikan kesehatan mental Anda dan mencari dukungan jika diperlukan.
            @else
                Anda memiliki tingkat kecemasan rendah. Tetap menjaga kesehatan mental Anda dengan melakukan aktivitas yang menyenangkan dan berkualitas.
            @endif
        </p>
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
