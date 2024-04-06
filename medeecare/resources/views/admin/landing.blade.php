@extends('layouts.admin.layout')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Data Pengguna</h5>
                    <p class="card-text">Kelola data pengguna, termasuk informasi pribadi, riwayat kesehatan, dan laporan aktivitas.</p>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Kelola Pengguna</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Artikel</h5>
                    <p class="card-text">Kelola artikel, termasuk membuat, mengedit, dan menghapus artikel.</p>
                    <a href="{{ "<!--route('admin.manage_articles')-->" }}" class="btn btn-primary">Kelola Artikel</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistik Pengguna</h5>
                    <p class="card-text">Lihat statistik pengguna, termasuk jumlah pengguna, riwayat masuk, dll.</p>
                    <a href="{{ "<!--route('admin.user_statistics')-->" }}" class="btn btn-primary">Statistik Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection