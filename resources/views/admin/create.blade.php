@extends('layouts.admin.layout')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <form method="POST" action="{{ route('admin.store') }}">
                    @csrf
                    
                    <div class="form-group mb-2">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control mt-3" id="name" name="name" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control mt-3" id="email" name="email" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="email">Password:</label>
                        <input type="text" class="form-control mt-3" id="password" name="password" placeholder="Minimal 8 karakter!" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="personal_info">Informasi Pribadi:</label>
                        <textarea class="form-control mt-3" id="personal_info" name="personal_info" rows="3" required></textarea>
                    </div>

                    <div class="form-group mb-2">Role:</label>
                        <input type="text" class="form-control mt-3" id="role" name="role" value="Admin" disabled>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>

                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
