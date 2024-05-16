<!-- resources/views/diabetes-test/show.blade.php -->

@extends('layouts.diabetes.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tes Diabetes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->diabetes_risk)
                        <div class="alert alert-info" role="alert">
                            Tingkat Risiko Diabetes Anda: {{ Auth::user()->diabetes_risk }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('diabetes-test.calculate') }}">
                        @csrf

                        <div class="form-group">
                            <label for="glucose_level">Tingkat Glukosa (mg/dL)</label>
                            <input id="glucose_level" type="number" class="form-control" name="glucose_level" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Hitung</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection