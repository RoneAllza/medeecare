@extends('layouts.homepage.layout')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Dahboard')
  @section('page-title','penyakit')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Penyakit</h3>
      <div class="pull-right">
        <a href="{{ route('penyakit.create')}}" class="btn btn-info">Tambah Data</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Penyakit</th>
            <th>Slug</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($penyakit as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_penyakit}}</td>
                <td>{{$item->slug}}</td>
                <td> 
                    <a href="{{ route('penyakit.edit', $item->id)}}" class="btn btn-info">Edit</a>

                    <form id="deleteForm{{ $item->id }}" action="{{ route('penyakit.destroy',$item->id)}}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<button type="button" class="btn btn-danger" onclick="deleteItem({{ $item->id }})">
    <span class="fa fa-trash"></span> Delete
</button>

<script>
    function deleteItem(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('deleteForm' + id).submit();
        }
    }
</script>

                </td>
            </tr>
            @endforeach
       
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  @push('datatables')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
  @endpush
  @push('customdatatables')
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  @endpush
  @endsection