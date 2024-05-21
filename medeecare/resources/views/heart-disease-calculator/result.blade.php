<!-- resources/views/heart-disease-calculator/result.blade.php -->

@extends('layouts.jantungan.app')

@section('content')
    <section>
        <h2 class="mb-4">Hasil Kalkulasi Risiko Penyakit Jantung</h2>
        <p class="mt-4">Skor risiko penyakit jantung Anda: {{ $riskScore }}</p>
    </section>
@endsection
