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
        text-align: left; /* Teks berada di kiri */
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

    p {
        color: #6c757d; /* Warna abu-abu */
        margin-bottom: 20px; /* Jarak bawah dari paragraf */
    }

    .form-group {
        margin-bottom: 30px; /* Jarak bawah dari form group */
    }

    /* .form-group label {
        font-weight: bold; /* Tebalkan label */
    } */

    .form-group input[type="radio"] {
        margin-right: 10px; /* Jarak kanan dari radio button */
    }

    .btn-primary {
        background-color: #A91D3A; /* Warna biru */
        border-color: #A91D3A; /* Warna border biru */
        color: #FFFFFF;
        padding: 10px 20px; /* Besar padding tombol */
        font-size: 14px; /* Besar font tombol */
        border-radius: 8px; /* Sudut bulatan tombol */
        transition: background-color 0.3s ease; /* Animasi perubahan warna tombol */
    }

    .btn-primary:hover {
        background-color: #C73659; /* Warna biru yang sedikit lebih gelap saat hover */
        border-color: #C73659; /* Warna border biru saat hover */
    }
</style>

<div class="container">
    <h2>Tes Stress</h2>
    <b>Dalam sebulan terakhir, seberapa sering kamu...</b>
    <p></p>
    <form action="{{ route('tes-stress.store') }}" method="POST">
        @csrf
        @foreach ($pertanyaan as $item)
            <div class="form-group">
                <label>{{ $loop->iteration }}. {{ $item->pertanyaan_stress }}</label>
                <div>
                    <label>
                        <input type="radio" name="jawaban[{{ $item->id_pertanyaan_stress }}]" value="0" required> Tidak pernah
                    </label>
                    <label>
                        <input type="radio" name="jawaban[{{ $item->id_pertanyaan_stress }}]" value="1"> Jarang
                    </label>
                    <label>
                        <input type="radio" name="jawaban[{{ $item->id_pertanyaan_stress }}]" value="2"> Kadang-kadang 
                    </label>
                    <label>
                        <input type="radio" name="jawaban[{{ $item->id_pertanyaan_stress }}]" value="3"> Cukup sering
                    </label>
                    <label>
                        <input type="radio" name="jawaban[{{ $item->id_pertanyaan_stress }}]" value="4"> Sangat sering
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit Jawaban</button>
    </form>
</div>
@endsection
