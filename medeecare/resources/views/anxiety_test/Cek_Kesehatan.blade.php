@extends('template.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Kesehatan Mental</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 16px;
            width: 18rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 16px;
        }

        .card p {
            margin-bottom: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Pilih Psikolog, Psikiater, atau Cek Gangguan Kesehatan Mental</h1>

    <div class="container">
        <!-- Card Psikolog -->
        <div class="card">
            <img src="psikolog.jpg" class="card-img-top" alt="Psikolog">
            <div class="card-body">
                <h3 class="card-title">Dr. Psikolog A</h3>
                <p class="card-text">Spesialis Kesehatan Mental</p>
                <button class="btn btn-primary">Pilih</button>
            </div>
        </div>

        <!-- Card Psikiater -->
        <div class="card">
            <img src="psikiater.jpg" class="card-img-top" alt="Psikiater">
            <div class="card-body">
                <h3 class="card-title">Dr. Psikiater B</h3>
                <p class="card-text">Spesialis Kesehatan Jiwa</p>
                <button class="btn btn-primary">Pilih</button>
            </div>
        </div>

        <!-- Card Cek Gangguan Kesehatan Mental -->
        <div class="card">
            <img src="cek_gangguan.jpg" class="card-img-top" alt="Cek Gangguan">
            <div class="card-body">
                <h3 class="card-title">Cek Gangguan Kesehatan Mental</h3>
                <p class="card-text">Lakukan tes untuk mengetahui kondisi kesehatan mental Anda.</p>
                <button class="btn btn-primary">Mulai Tes</button>
            </div>
        </div>
    </div>
</body>
</html>
