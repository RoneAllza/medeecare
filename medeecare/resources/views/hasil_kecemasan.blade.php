@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Tes Kecemasan</div>

                <div class="card-body">
                    <p>Skor Kamu: {{ $skor }}</p>
                    <p>Range: {{ $range }}</p>
                    <p>Skor kamu menandakan gangguan kecemasan: {{ $keterangan }}</p>

                    <form method="GET" action="{{ route('tes-kecemasan.pertanyaan') }}">
                        <button type="submit" class="btn btn-primary">Ulangi Tes</button>
                    </form>
                    <a href="{{ route('tes-kecemasan.lihat-hasil', ['id' => $hasilTes->id]) }}" class="btn btn-primary">Lihat Detail Tes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
