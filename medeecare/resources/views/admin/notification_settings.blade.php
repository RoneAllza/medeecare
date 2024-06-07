<!-- resources/views/admin/notification_settings.blade.php -->

@extends('layouts.admin.layout')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <form method="POST" action="{{ route('admin.store_notification_settings') }}">
                    @csrf

                    <div class="form-group mb-2">
                        <label for="condition">Kondisi Kesehatan:</label>
                        <input type="text" class="form-control mt-3" id="condition" name="condition" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="threshold">Ambang Batas Nilai:</label>
                        <input type="number" class="form-control mt-3" id="threshold" name="threshold" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>

                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
