@extends('layouts.admin.layout')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <!-- Bagian Notifikasi -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">Notification List</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($notifications as $notification)
                        <li class="list-group-item">{{ $notification->condition }} - Threshold: {{ $notification->threshold }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Bagian Notifikasi -->

    <!-- Bagian Isi Konten Landing Page Admin -->
    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Data Pasien</h5>
                    <p class="card-text">Kelola data pasien, termasuk informasi pribadi, riwayat kesehatan, dan laporan aktivitas.</p>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Kelola Pasien</a>
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
    <!-- Akhir Bagian Isi Konten Landing Page Admin -->
</div>

@endsection
