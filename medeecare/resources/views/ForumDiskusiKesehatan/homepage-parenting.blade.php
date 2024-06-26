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
  <h4 class="card-title">Komunitas Parenting</h4>
  </div>
  <div class="card-body">
  <img src="https://static.vecteezy.com/system/resources/previews/000/683/493/original/mom-reading-for-kids-family-sitting-on-the-sofa-with-book-in-flat-style.jpg" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>11</b> Topik</span>
      <span><b>13k</b> Interaksi</span>
      <span><b>21k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Menjadi orang tua adalah pekerjaan seumur hidup. Butuh kesiapan fisik, mental dan emosional untuk menjalaninya. Ayo berbagi suka duka saat mengasuh anak!</p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait parenting? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

@endsection