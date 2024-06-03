@extends('layouts.jantungan.app')

@section('content')
    <section>
        <h2 class="mb-4">Hasil Perhitungan Risiko Penyakit Jantung</h2>
        <p class="mt-4">Anda memiliki risiko penyakit jantung: {{ $riskLevel }}</p>
    </section>
@endsection
