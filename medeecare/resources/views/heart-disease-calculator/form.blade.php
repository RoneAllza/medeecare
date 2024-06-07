<!-- resources/views/heart-disease-calculator/form.blade.php -->

@extends('layouts.jantungan.app')

@section('content')
    <section>
        <h2 class="mb-4">Kalkulator Resiko Penyakit Jantung</h2>
        <form action="/heart-disease-calculator" method="post" class="mt-4">
            @csrf
            <div class="form-group mb-3">
                <label for="age">Usia:</label>
                <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="smoking">Apakah Anda Merokok?</label>
                <select id="smoking" name="smoking" class="form-control" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="family_history">Riwayat Penyakit Jantung dalam Keluarga?</label>
                <select id="family_history" name="family_history" class="form-control" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="blood_pressure">Tekanan Darah:</label>
                <input type="number" id="blood_pressure" name="blood_pressure" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Risiko</button>
        </form>
    </section>
@endsection
