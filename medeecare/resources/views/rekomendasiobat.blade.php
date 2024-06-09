@extends('layouts.homepage.layout')

<!-- @push('nav')
    <ul class="nav-menu nav navbar-nav">
        @foreach ($penyakitList ?? [] as $item)
        <li style="border-color: red;"><a href="{{ route('rekomendasiobat') }}">{{$item->nama_penyakit}}</a></li>
        @endforeach
    </ul>
@endpush -->

@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            @foreach ($obatPenyakit as $penyakitId => $obatList)
            <div class="col-md-12">
                <h2>{{ $penyakitList->firstWhere('id', $penyakitId)->nama_penyakit }}</h2>
                <div class="row">
                    @foreach ($obatList as $op)
                    <div class="col-md-4">
                        <div class="doctor-entry text-center">
                            <div class="doctor-img">
                                <img src="{{ asset('uploads/'.$op->gambar) }}" alt="{{ $op->nama_obat }}" height="200px" width="200px">
                            </div>
                            <div class="doctor-info">
                                <h3>{{ $op->nama_obat }}</h3>
                                <p>{{ $op->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
