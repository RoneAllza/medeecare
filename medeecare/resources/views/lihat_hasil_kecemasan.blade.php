@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Tes Kecemasan</div>

                <div class="card-body">
                    <h5>Jawaban Kamu:</h5>
                    <ul>
                        <li>1. Merasa gugup, cemas, atau gelisah? - {{ $jawaban['jawaban1'] }}, Skor: {{ $jawaban['jawaban1'] }}</li>
                        <li>2. Tidak dapat menghentikan atau mengontrol kekhawatiran? - {{ $jawaban['jawaban2'] }}, Skor: {{ $jawaban['jawaban2'] }}</li>
                        <li>3. Terlalu banyak mengkhawatirkan berbagai hal? - {{ $jawaban['jawaban3'] }}, Skor: {{ $jawaban['jawaban3'] }}</li>
                        <li>4. Sulit merasa santai? - {{ $jawaban['jawaban4'] }}, Skor: {{ $jawaban['jawaban4'] }}</li>
                        <li>5. Merasa kurang istirahat hingga sulit untuk diam? - {{ $jawaban['jawaban5'] }}, Skor: {{ $jawaban['jawaban5'] }}</li>
                        <li>6. Mudah kesal atau marah? - {{ $jawaban['jawaban6'] }}, Skor: {{ $jawaban['jawaban6'] }}</li>
                        <li>7. Merasa takut hal buruk akan terjadi? - {{ $jawaban['jawaban7'] }}, Skor: {{ $jawaban['jawaban7'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
