@extends('layouts.homepage.layout')

@section('content')
    <style>
    h1 {text-align: center;}
    h2 {text-align: center;}
    h3 {text-align: left;}
    </style>
  
<form>
  <p class="py-1">
    <div class="container mt-5">
      <label for="formGroupExampleInput" class="form-label">Judul</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan judul yang menarik untuk Anda bagikan ke Forum">
</div>

    <div class="mb-3">
    <div class="container mt-5">
     <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
     <textarea class="form-control" id="formGroupExampleInput2" rows="3" placeholder="Isikan dengan pertanyaan atau pernyataan yang ingin Anda bagikan ke Forum"></textarea>
</div>


    <div class="container mt-5">
    <label for="inputState" class="form-label">Pilih Komunitas</label>
    <select id="inputState" class="form-select">
      <option value="1">Kesehatan Mental</option>
      <option value="2">Diabetes</option>
      <option value="3">Parenting</option>
      <option value="4">Kehamilan dan Anak</option>
      <option value="5">Penyakit Infeksi</option>
      <option value="6">Olahraga</option>
    </select>

  <p class="py-1">
    <div class="col-12">
    <div class="container mt-5">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Post sebagai Anonim?
      </label>
    </div>
  </div>

  <p class="py-1">
    <div class="col-12">
    <div class="mb-3 form-check">
    <button type="submit" class="btn btn-primary">Unggah ke Forum</button>
  </div>
</form>

@endsection
