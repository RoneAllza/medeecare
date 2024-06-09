@extends('layouts.homepage.layout')

@section('content')
    <style>
        h1, h2, h4, h6 { text-align: center; }
        h3 { text-align: left; }
        .form-check { display: flex; align-items: center; }
        .form-check-input { margin-right: 5px; }
    </style>

<div class="container mt-5">
  <p class="py-3">
    <div class="card">
      <div class="card-header">
        Resume Reservasi
  </div>

  <div class="card-body">
   <blockquote class="blockquote mb-0 text-center">
      <p>Nomor Antrian Anda:</p> 
      <h4><i><u>04B</u></i></h4>
      <p class="py-1">
    </blockquote>
    
    <blockquote class="blockquote mb-0">
      <p><h6>Harap perhatikan nomor antrian Anda! Silahkan lakukan <i>SCREENSHOOT</i> bila perlu.</h6></p>
    </blockquote>
  </div>
</div>
@endsection