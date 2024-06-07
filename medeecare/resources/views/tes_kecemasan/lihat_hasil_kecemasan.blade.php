@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif; /* Gunakan font Arial atau font sans-serif */
        color: #333; /* Warna teks */
        background-color: #f8f9fa; /* Background putih keabu-abuan */
    }

    .container {
        max-width: 700px; /* Lebar maksimum kontainer */
        margin: auto; /* Posisi tengah */
        padding: 30px; /* Padding kontainer */
        background-color: #FFFFFF; /* Background putih */
        border-radius: 10px; /* Sudut bulatan */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        margin-top: 20px; /* Jarak atas dari konten */
    }

    h2 {
        color: #800000; /* Warna abu-abu tua */
        margin-bottom: 20px; /* Jarak bawah dari judul */
    }

    .card {
        border: 1px solid #dee2e6; /* Border tipis */
        border-radius: 10px; /* Sudut bulatan */
        margin-bottom: 20px; /* Jarak bawah dari card */
    }

    .card-body {
        padding: 20px; /* Padding isi card */
    }

    .card-body p {
        margin-bottom: 10px; /* Jarak bawah dari paragraf */
    }

    .card-body h5 {
        margin-bottom: 10px; /* Jarak bawah dari judul */
    }

    ul {
        padding-left: 20px; /* Padding kiri untuk list */
    }

    ul li {
        margin-bottom: 5px; /* Jarak bawah dari list item */
    }
</style>

<div class="container">
    <h2>Detail Hasil Tes Kecemasan</h2>
    <div class="card">
        <div class="card-body">
            <!-- <h5>ID Tes: {{ $hasilTes->id_tes }}</h5> -->
            <p>Hasil Tes Kamu Menunjukkan Kamu Mengalami : {{ $hasilTes->deskripsi_hasil }}</p>
            <p>Skor Hasil Akhir Tes Kamu : {{ $hasilTes->skor_hasil }}</p>
            <h5>Perhitungan Jawaban :</h5>
            <ul>
                @foreach (json_decode($hasilTes->jawaban, true) as $id_pertanyaan => $jawaban)
                    <li>Pertanyaan no {{ $id_pertanyaan }} : bernilai {{ $jawaban }} poin</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
