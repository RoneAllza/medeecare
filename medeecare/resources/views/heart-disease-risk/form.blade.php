@extends('layouts.jantungan.app')

@section('content')
    <section>
        <h2>Informasi Resiko Penyakit Jantung</h2>
        <form action="/heart-disease-risk" method="post" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="bmi">BMI:</label>
                <input type="text" id="bmi" name="bmi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Hitung Risiko</button>
        </form>
    </section>
@endsection