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
  <h4 class="card-title">Komunitas Diabetes</h4>
  </div>
  <div class="card-body">
  <img src="https://image.freepik.com/free-vector/diabetes-control-therapy-medical-cutout-cartoon_81522-4804.jpg" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>10</b> Topik</span>
      <span><b>6k</b> Interaksi</span>
      <span><b>20k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Diabetes punya dampak mematikan. Kamu bisa terkena gangguan jantung, ginjal sampai syaraf dan penglihatan. 
  Untuk menghadapinya, kamu tidak bisa sendirian.</p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait diabetes? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

</body>

@endsection