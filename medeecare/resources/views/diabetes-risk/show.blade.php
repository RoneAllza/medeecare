<!-- resources/views/diabetes-risk/show.blade.php -->

@extends('layouts.diabetes.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Tes Resiko Diabetes</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-warning">
                            {{ session('message') }}
                        </div>
                    @endif

                    <h3>Resiko Diabetes Anda:</h3>
                    <p>{{ $diabetesRisk }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
