@extends('layouts.admin.layout')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-1">Daftar Admin</h3>
                </div>

                <div class="container">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary float-end mt-2">Tambah Admin</a>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('admin.editadmin', $user->id) }}" class="btn btn-primary">Edit</a>
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