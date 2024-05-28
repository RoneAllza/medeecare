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
      <h3 class="box-title">Edit Obat

      </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
        <form method="POST" action="{{ route('obat.update', ['id' => $obat->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label>Nama Obat</label>
          <input type="text" value="{{$obat->nama_obat}}"class="form-control" name="obat">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <label>Jenis Penyakit</label>
          <select name="penyakit_id" class="form-control">
              @foreach ($penyakit as $item)
                @if($item->id==$obat->penyakit_id)
                <option value={{$item->id}} selected >{{$item->nama_penyakit}}</option>
                @else 
                <option value={{$item->id}}>{{$item->nama_penyakit}}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
           <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            {!! $obat->body !!}
            </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Obat</button>
          <a href="{{ route('obat')}}" class="btn btn-danger">Kembali</a>
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