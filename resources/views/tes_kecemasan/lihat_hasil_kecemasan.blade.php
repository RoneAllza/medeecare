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
                        <li>1. Merasa gugup, cemas, atau gelisah? - Jawaban: {{ $jawaban['jawaban1']['jawaban'] }}, Skor: {{ $jawaban['jawaban1']['skor'] }}</li>
                        <li>2. Tidak dapat menghentikan atau mengontrol kekhawatiran? - Jawaban: {{ $jawaban['jawaban2']['jawaban'] }}, Skor: {{ $jawaban['jawaban2']['skor'] }}</li>
                        <li>3. Terlalu banyak mengkhawatirkan berbagai hal? - Jawaban: {{ $jawaban['jawaban3']['jawaban'] }}, Skor: {{ $jawaban['jawaban3']['skor'] }}</li>
                        <li>4. Sulit merasa santai? - Jawaban: {{ $jawaban['jawaban4']['jawaban'] }}, Skor: {{ $jawaban['jawaban4']['skor'] }}</li>
                        <li>5. Merasa kurang istirahat hingga sulit untuk diam? - Jawaban: {{ $jawaban['jawaban5']['jawaban'] }}, Skor: {{ $jawaban['jawaban5']['skor'] }}</li>
                        <li>6. Mudah kesal atau marah? - Jawaban: {{ $jawaban['jawaban6']['jawaban'] }}, Skor: {{ $jawaban['jawaban6']['skor'] }}</li>
                        <li>7. Merasa takut hal buruk akan terjadi? - Jawaban: {{ $jawaban['jawaban7']['jawaban'] }}, Skor: {{ $jawaban['jawaban7']['skor'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
