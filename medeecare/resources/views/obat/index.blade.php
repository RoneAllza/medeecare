@extends('layouts.homepage.layout')
@push('customcss')
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endpush
@section('title', 'Dashboard')
@section('page-title', 'Obat')
@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Obat</h3>
        <div class="pull-right">
            <a href="{{ route('obat.create') }}" class="btn btn-info">Tambah Data</a>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Gambar</th>
                    <th>Jenis Penyakit</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_obat }}</td>
                    <td>
                        @if($item->gambar)
                            <img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>{{ $item->penyakit->nama_penyakit }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-info">Edit</a>
                        <form id="deleteForm{{ $item->id }}" action="{{ route('obat.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <form id="deleteForm{{ $item->id }}" action="{{ route('obat.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="deleteItem({{ $item->id }})">
                                <span class="fa fa-trash"></span> Delete
                            </button>
                            </form>
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
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
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

    function deleteItem(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('deleteForm' + id).submit();
        }
    }
</script>
@endpush
@endsection
