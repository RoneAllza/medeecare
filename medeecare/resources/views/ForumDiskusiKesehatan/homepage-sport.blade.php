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
  <h4 class="card-title">Komunitas Olahraga</h4>
  </div>
  <div class="card-body">
  <img src="https://static.vecteezy.com/system/resources/previews/000/693/406/original/people-exercise-and-fitness-cartoon-set-vector.jpg" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>9</b> Topik</span>
      <span><b>12k</b> Interaksi</span>
      <span><b>42k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Olahraga itu penting. Tapi bagaimana cara berolahraga yang benar? Bagikan ceritamu dan silakan bertanya pada para pakar kami tentang olahraga dan kesehatan tubuh. </p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait olahraga? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

@endsection