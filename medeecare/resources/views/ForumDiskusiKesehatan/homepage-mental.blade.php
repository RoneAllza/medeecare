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
  <h4 class="card-title">Komunitas Kesehatan Mental</h4>
  </div>
  <div class="card-body">
  <img src="https://static.vecteezy.com/system/resources/previews/000/542/211/large_2x/depression-people-affect-on-mental-health-vector-illustration.jpg" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>14</b> Topik</span>
      <span><b>5.9k</b> Interaksi</span>
      <span><b>26k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Jiwa yang sehat sangat penting untuk menjaga kesehatan secara keseluruhan. Kami peduli dengan kesehatan jiwa Anda, terutama selama masa sulit ini.</p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait kesehatan mental? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

@endsection