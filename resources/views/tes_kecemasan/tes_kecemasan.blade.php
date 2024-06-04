<div>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tes Depresi</div>

                <div class="card-body">
                    <h5>Tes gangguan kecemasan dengan tes Generalized Anxiety Disorder-7</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-thick"></i> Tes yang singkat dan valid secara ilmiah, digunakan oleh tenaga kesehatan.</li>
                        <li><i class="bi bi-thick"></i> Berisi 7 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.</li>
                        <li><i class="bi bi-thick"></i> Skor kamu bersifat rahasia. Ahli kesehatan mental hanya dapat melihat informasimu jika kamu membagikannya.</li>
                    </ul>
                    <a href="{{ route('tes_kecemasan.pertanyaan') }}" class="btn btn-primary">Mulai Tes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>
