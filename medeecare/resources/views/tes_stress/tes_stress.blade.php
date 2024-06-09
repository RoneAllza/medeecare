@extends('layouts.homepage.layout')

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
    <h2>Tes Stress!</h2>
    <p>Stress bisa terjadi pada siapa saja dan kapan saja. Penyebabnya bisa karena hal serius dan sepele. Meskipun wajar terjadi, stres bisa membahayakan kesehatan jika tidak dikelola dengan baik. Ayo cek keadaan kesehatan jiwa kamu di sini!
    </p>
    <p>Tes ini berisi 10 pertanyaan menggunakan skala 0 sampai 4 untuk menghitung skor akhir.</p>
    <a href="{{ route('pertanyaan-stress.index') }}" class="btn btn-primary">Mulai Tes</a>
</div>

<div class="container card">
    <h3>Gejala-gejala Stress:</h3>
    <ul>
        <li>Kesulitan berkonsentrasi atau mengingat detail.</li>
        <li>Ketegangan otot atau sakit kepala.</li>
        <li>Kesulitan tidur atau tidur yang tidak nyenyak.</li>
        <li>Perubahan nafsu makan, bisa meningkat atau menurun.</li>
        <li>Perasaan gelisah, cemas, atau tegang.</li>
        <li>Rasa lelah yang berlebihan atau kelelahan.</li>
        <li>Sikap iritabilitas atau mudah marah.</li>
        <li>Masalah pencernaan seperti sakit perut atau diare.</li>
        <li>Menarik diri dari aktivitas sosial dan mengisolasi diri.</li>
    </ul>
</div>
@endsection
