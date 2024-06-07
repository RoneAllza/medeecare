@extends('layouts.homepage.layout')

@section('content')

<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        margin: 16px auto;
        /* Center the card horizontally */
        width: 80%;
        /* Make the card wider */
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

    .card-psikolog {
        margin-top: 50px;
        /* Added margin-top to move the card below the navbar */
    }

    .card-cek {
        margin-top: 10px;
        /* Adjusted margin-top to move the card further down */
    }
</style>
<div class="container" style="margin-top: 50px;">
    <!-- Card Psikolog -->
    <div class="card card-psikolog">
        <div class="card-body">
            <h3 class="card-title">Psikolog dan Psikiater</h3>
            <p class="card-text" style="margin-bottom: 10px;">Lihatlah psikolog atau psikiater untuk membantu Anda dalam
                pengujian kesehatan mental.</p>
            <a href="{{ route('kesehatanmental') }}" class="btn btn-danger"
                style="margin-top: 10px; background-color: #8B0C0C;">Lihat</a>
        </div>
    </div>

    <!-- Card Cek Gangguan Kesehatan Mental -->
    <div class="card card-cek">
        <div class="card-body">
            <h3 class="card-title">Cek Gangguan Kesehatan Mental</h3>
            <p class="card-text" style="margin-bottom: 10px;">Lakukan tes untuk mengetahui kondisi kesehatan mental
                Anda.</p>
            <a href="{{ route('anxiety.form') }}" class="btn btn-danger"
                style="margin-top: 10px; background-color: #8B0C0C;">Mulai Tes</a>
        </div>
    </div>
</div>

@endsection