<!-- resources/views/medication-recommendation/index.blade.php -->

@extends('layouts.jantungan.app')

@section('content')
    <section>
        <h2 class="mb-4">Rekomendasi Obat-Obatan</h2>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <ul class="list-group mt-4">
            @foreach ($recommendations as $medication)
                <li class="list-group-item">{{ $medication }}</li>
            @endforeach
        </ul>
    </section>
@endsection
