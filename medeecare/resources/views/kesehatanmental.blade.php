@extends('layouts.homepage.layout')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>List of Doctors</h2>
                </div>
            </div>
            <!-- List of Doctors -->
            @foreach ($dokter as $doc)
            <div class="col-md-4">
                <div class="doctor-entry text-center">
                    <div class="doctor-img">
                        <img src="{{ asset('uploads/'.$doc->gambar) }}" alt="{{ $doc->dokter }}" height="200px" width="200px">
                    </div>
                    <div class="doctor-info">
                        <h3>{{ $doc->dokter }}</h3>
                        <p>{{ $doc->body }}</p> <!-- Changed from $doc->Deskripsi to $doc->body to match database fields -->
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /List of Doctors -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection
