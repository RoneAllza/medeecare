@extends('layouts.homepage.layout')

@section('content')
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Data Berhasil Disimpan</h4>
        <p>Data antrian berhasil ditambahkan queue.</p>
        <hr>
        <p class="mb-0"></p>
      </div>
      <a href="/admin" class="btn btn-primary">Kembali ke Home</a>
@endsection
   