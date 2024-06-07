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
        text-align: center; /* Teks berada di tengah */
        padding: 30px; /* Padding kontainer */
        background-color: #FFFFFF; /* Background putih */
        border-radius: 10px; /* Sudut bulatan */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        margin-top: 20px; /* Jarak atas dari konten */
    }

    h2 {
        color: #800000; /* Warna maroon muda */
        margin-bottom: 20px; /* Jarak bawah dari judul */
    }

    h3 {
        color: #800000; /* Warna maroon muda */
        margin-bottom: 20px; /* Jarak bawah dari judul */
    }

    p {
        margin-bottom: 20px; /* Jarak bawah dari paragraf */
    }

    .btn-primary {
        background-color: #A91D3A; /* Warna maroon */
        border-color: #A91D3A; /* Warna border maroon */
        color: #FFFFFF;
        padding: 10px 20px; /* Besar padding tombol */
        font-size: 14px; /* Besar font tombol */
        border-radius: 8px; /* Sudut bulatan tombol */
        transition: background-color 0.3s ease; /* Animasi perubahan warna tombol */
    }

    .btn-primary:hover {
        background-color: #C73659; /* Warna maroon yang sedikit lebih gelap saat hover */
        border-color: #C73659; /* Warna border maroon saat hover */
    }

    .card {
        background-color: #FFFFFF; /* Background putih */
        border-radius: 10px; /* Sudut bulatan */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        padding: 30px; /* Padding kartu */
        margin-top: 20px; /* Jarak atas dari kartu */
        text-align: left; /* Teks berada di kiri */
    }

    .card h3 {
        color: #800000; /* Warna maroon muda */
        margin-bottom: 15px; /* Jarak bawah dari judul */
    }

    .card ul {
        list-style-type: disc; /* Tanda bulat untuk daftar */
        padding-left: 20px; /* Padding kiri untuk daftar */
        line-height: 1.6; /* Jarak antar baris */
    }

    .card ul li {
        margin-bottom: 10px; /* Jarak bawah dari tiap item */
    }
</style>

<div class="container">
    <h2>Tes Gangguan Kecemasan</h2>
    <h3>Tes gangguan kecemasan dengan tes Generalized Anxiety Disorder-7</h3>
    <p>Tes yang singkat dan valid secara ilmiah, digunakan oleh tenaga kesehatan.</p>
    <p>Berisi 7 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.</p>
    <a href="{{ route('pertanyaan-kecemasan.index') }}" class="btn btn-primary">Mulai Tes</a>
</div>

<div class="container card">
    <h3>Gejala-gejala Kecemasan:</h3>
    <ul>
        <li>Merasa gugup, gelisah, atau tegang.</li>
        <li>Merasa bahaya, panik, atau takut yang mendekat.</li>
        <li>Detak jantung meningkat.</li>
        <li>Bernapas dengan cepat (hiperventilasi).</li>
        <li>Berkeringat.</li>
        <li>Gemetar.</li>
        <li>Merasa lemah atau lelah.</li>
        <li>Konsentrasi yang buruk atau pikiran yang kosong.</li>
        <li>Masalah tidur (sulit tidur atau tidur tidak nyenyak).</li>
        <li>Menghindari situasi yang memicu kecemasan.</li>
        <li>Mengalami masalah pencernaan atau gangguan lambung.</li>
        <li>Kesulitan mengendalikan kekhawatiran atau ketakutan.</li>
    </ul>
</div>

@endsection
