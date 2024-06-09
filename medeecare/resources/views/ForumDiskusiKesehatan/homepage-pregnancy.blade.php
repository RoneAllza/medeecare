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
  <h4 class="card-title">Komunitas Kehamilan dan Anak</h4>
  </div>
  <div class="card-body">
  <img src="https://www.washingtonpost.com/resizer/lZeGnIxEU1VWu0LHybKLB0qg0bI=/1200x0/arc-anglerfish-washpost-prod-thelily-washpost.s3.amazonaws.com/public/OTTCITXARFEB5OIPKGTUEZPBWA.jpg" class="card-img-top" style="max-width: 55%;display: block; margin: 0 auto;">
  <p class="py-1">
  <p class="card-text text-center">
      <span><b>23</b> Topik</span>
      <span><b>19k</b> Interaksi</span>
      <span><b>33k</b> Anggota</span>
  </p>
  <hr>
  <p class="card-text text-center">Bund, proses kehamilan tidak semudah yang dibayangkan. Butuh perjuangan fisik dan mental untuk menghadapinya.</p>
  </div>
</div>
</div>
    
<div class="container mt-3">
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
  <label for="floatingInputDisabled">Punya pertanyaan terkait kehamilan dan anak? Silahkan klik dibawah ini untuk memposting pertanyaanmu!</label>
</div>
  <p class="py-1">
  <a href="/pengisian-form" class="btn btn-dark">Post sesuatu >></a>
</div>

@endsection