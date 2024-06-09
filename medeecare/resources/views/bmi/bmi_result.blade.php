@extends('layouts.homepage.layout')

@section('content')

<style>
    .category-indicator {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        margin-bottom: 30px;
        background-color: #f8f9fa;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .category {
        flex: 1;
        text-align: center;
        position: relative;
        padding: 10px;
    }

    .indicator {
        position: absolute;
        top: 40px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 20px;
        color: #000;
    }
</style>

<section class="container d-flex flex-column d-grid gap-5 justify-content-center align-items-center" style="background-color: #B6252A; height: 95vh;">
    <div class="card text-center shadow-lg w-100" style="width: 25rem; border-radius: 1rem;">
        <div class="card-body p-4">
            @if($category == 'Kurus')
            <h1 class="card-title mb-4">BMI KAMU <span style="color:#ffc107">{{ number_format($bmi, 1) }}</span></h1>
            @elseif($category == 'Normal')
            <h1 class="card-title mb-4">BMI KAMU <span style="color:#28a745">{{ number_format($bmi, 1) }}</span></h1>
            @elseif($category == 'Gemuk')
            <h1 class="card-title mb-4">BMI KAMU <span style="color:#17a2b8">{{ number_format($bmi, 1) }}</span></h1>
            @else
            <h1 class="card-title mb-4">BMI KAMU <span style="color:#dc3545">{{ number_format($bmi, 1) }}</span></h1>
            @endif
            <div class="d-flex flex-row d-grid gap-5 justify-content-center">
                <p class="card-text">Tinggi (cm): <strong>{{ $tb }}</strong></p>
                <p class="card-text">Berat (kg): <strong>{{ $bb }}</strong></p>
            </div>
            <div class="category-indicator">
                <div class="category" style="background-color: #ffc107;color: white;">
                    <div class="name">Kurus</div>
                    @if($category == 'Kurus')
                    <div class="indicator">&#11205;</div>
                    @endif
                </div>
                <div class="category" style="background-color: #28a745;color: white;">
                    <div class="name">Normal</div>
                    @if($category == 'Normal')
                    <div class="indicator">&#11205;</div>
                    @endif
                </div>
                <div class="category" style="background-color: #17a2b8;color: white;">
                    <div class="name">Gemuk</div>
                    @if($category == 'Gemuk')
                    <div class="indicator">&#11205;</div>
                    @endif
                </div>
                <div class="category" style="background-color: #dc3545;color: white;">
                    <div class="name">Obesitas</div>
                    @if($category == 'Obesitas')
                    <div class="indicator">&#11205;</div>
                    @endif
                </div>
            </div>
            <a href="{{ route('bmi') }}" class="btn btn-danger btn-block mt-3 rounded-5 w-25">Hitung Ulang</a>
        </div>
    </div>

    <div class="d-flex flex-row d-grid gap-3 w-100">
        <div class="card shadow-lg w-100" style="width: 25rem; border-radius: 1rem;">
            <div class="card-body p-4">
                <h5 class="mb-3">BMI kamu : {{ number_format($bmi, 2) }}, {{$category}}</h5>
                @if($category == 'Normal')
                <p class="fs-4 w-75">Diet yang baik dapat mempertahankan kesehatan & imun</p>
                @else
                <p class="fs-4 w-75">Dalam 60% kasus, <span class="text-danger">pola makan yang buruk</span> dapat <span class="text-danger">berisiko</span> Diabetes</p>
                @endif
                <a href="{{ route('forumdiskusikesehatan') }}" class="btn btn-danger btn-block mt-3 rounded-2">Cek Forum</a>
            </div>
        </div>
        <div class="card shadow-lg w-100" style="width: 25rem; border-radius: 1rem;">
            <div class="card-body p-4">
                @if($category == 'Kurus')
                <h5 class="mb-3">Berat badan kurus dapat menyebabkan berbagai masalah penyakit</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="">
                            <li class="text-danger"><p class="text-dark">Infertilitas</p></li>
                            <li class="text-danger"><p class="text-dark">Anemia</p></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li class="text-danger"><p class="text-dark">Osteoporosis</p></li>
                            <li class="text-danger"><p class="text-dark">Sistem imun lemah</p></li>
                        </ul>
                    </div>
                </div>
                @elseif($category == 'Normal')
                <h5 class="mb-3 fs-3 ">Jaga gaya hidup sehat & konsultasi dokter jika ada masalah kesehatan</h5>
                @else
                <h5 class="mb-3">Berat badan kurus dapat menyebabkan berbagai masalah penyakit</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="">
                            <li class="text-danger"><p class="text-dark">Diabetes</p></li>
                            <li class="text-danger"><p class="text-dark">Hipertensi</p></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li class="text-danger"><p class="text-dark">Sakit Jantung</p></li>
                            <li class="text-danger"><p class="text-dark">Osteoarthritis</p></li>
                        </ul>
                    </div>
                </div>
                @endif
                <a href="{{ route('bmi') }}" class="btn btn-danger btn-block mt-3 rounded-2">Konsultasi Dokter</a>
            </div>
    </div>

</section>

@endsection