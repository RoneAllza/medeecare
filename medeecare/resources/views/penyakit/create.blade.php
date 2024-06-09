@extends('layouts.homepage.layout')
  @section('title','Dahboard')
  @section('page-title','Home')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Penyakit</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('penyakit.store')}}" method="POST">
        @method('POST')
        @csrf
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Penyakit</label>
              <input type="text" class="form-control" name="nama_penyakit" placeholder="Kategori"  value="{{ old('nama_penyakit') }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Slug Penyakit</label>
              <input type="text" class="form-control" name="slug" placeholder=" Slug Penyakit"  value="{{ old('slug') }}">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('penyakit')}}" class="btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection