@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tes Depresi</div>

                <div class="card-body">
                    <h5>Gejala-Gejala Depresi:</h5>
                    <ul>
                        @foreach($gejalas as $gejala)
                        <li>{{ $gejala->nama_gejala }} - {{ $gejala->deskripsi }}</li>
                        @endforeach
                    </ul>
                    <hr>
                    <p>Silakan jawab pertanyaan-pertanyaan berikut untuk mengetahui apakah Anda mungkin mengalami depresi:</p>
                    <form action="{{ route('proses.tes') }}" method="POST">
                        @csrf
                        {{-- Tambahkan pertanyaan-pertanyaan di sini --}}
                        {{-- Contoh: --}}
                        {{-- <label>Pertanyaan 1: Apakah Anda sering merasa sedih?</label><br>
                        <input type="radio" name="jawaban_pertanyaan_1" value="ya"> Ya<br>
                        <input type="radio" name="jawaban_pertanyaan_1" value="tidak"> Tidak<br> --}}
                        <button type="submit" class="btn btn-primary">Selesai Tes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
