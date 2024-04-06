@extends('layouts.layout')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Edit')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Artikel

      </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
        <form method="POST" action="{{ route('Artikel.update', ['id' => $artikel->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label>Judul Artikel</label>
          <input type="text" value="{{$artikel->judul}}"class="form-control" name="judul">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <label>Kategori Artikel</label>
          <select name="categories_id" class="form-control">
              @foreach ($category as $item)
                @if($item->id==$artikel->categories_id)
                <option value={{$item->id}} selected >{{$item->nama_kategori}}</option>
                @else 
                <option value={{$item->id}}>{{$item->nama_kategori}}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Isi Artikel</label>
           <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            {!! $artikel->body !!}
            </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Artikel</button>
          <a href="{{ route('Artikel')}}" class="btn btn-danger">Kembali</a>
        </div>

      </form>
    </div>
  </div>
</div>
  <!-- /.box -->
  @endsection
  @push('datatables')
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  @endpush