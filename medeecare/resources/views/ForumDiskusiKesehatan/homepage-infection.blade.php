@extends('layouts.homepage.layout')

@section('content')
    <style>
    h1 {text-align: center;}
    h2 {text-align: center;}
    h3 {text-align: left;}
    
    .card-text span {
      margin-right: 10px;
    }
    </style>
    
<p class="py-1">
<div class="container mt-5">
  <div class="card">
  <div class="card-header">
  <h4 class="card-title">Komunitas Penyakit Infeksi</h4>
  </div>
  <div class="card-body">
  <img src="https://blackdoctor.org/wp-content/uploads/2020/03/GettyImages-1157155416.jpg?is-pending-load=1" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>8</b> Topik</span>
      <span><b>2.6k</b> Interaksi</span>
      <span><b>17k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Kebanyakan penyebab penyakit infeksi tidak dapat terlihat oleh mata, karena disebabkan oleh virus, bakteri, jamur, dan parasit.
  </p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait penyakit infeksi? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

@endsection