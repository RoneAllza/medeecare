@extends('layouts.admin.layout')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Daftar Pasien</h3></div>

                <div class="container">
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Informasi Pribadi</th>
                                <th>Riwayat Kesehatan</th>
                                <th>Laporan Aktivitas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->personal_info }}</td>
                                    <td>{{ $user->health_history }}</td>
                                    <td>{{ $user->activity_report }}</td>
                                    <td>
                                        <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                        <!-- Anda bisa tambahkan tombol untuk menghapus jika diperlukan -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection