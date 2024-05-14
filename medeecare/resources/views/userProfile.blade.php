@extends('layouts.homepage.layout')

@section('content')

<section class="container" style="height: calc(100vh - 77px);">
    <!-- Content -->
    <div class="d-flex flex-row grid gap-5">
        <div class="card w-25 h-50 text-center shadow bg-body-tertiary mt-5">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">{{Auth::user()->name}}</h5>
                <p class="m-0">{{Auth::user()->email}}</p>
                <img src="/assets/img/doctor.png" class="border m-3" alt="" style="height:16vh; width:16vh;border-radius:50%; object-fit-cover;">
                <div class="mb-3">
                    <input type="file" class="d-none" id="upload">
                    <label for="upload" class="btn btn-primary">Choose a File</label>
                </div>
                <p class="m-0">Member Since:<span> {{$dateOnly}}</span></p>
            </div>
        </div>
        <div class="card w-75 p-5 shadow bg-body-tertiary mt-5">
            <h3>Edit Profile</h3>
            <hr>
            <div class="d-flex flex-row d-grid gap-3 mb-3">
                <div class="w-100">
                    <label class="">Nama</label>
                    <input type="text" name="name" class="form-control rounded-3" value="{{Auth::user()->name}}">
                </div>
                <div class="w-100">
                    <label class="">Email</label>
                    <input type="email" name="email" class="form-control rounded-3" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="d-flex flex-row d-grid gap-3 mb-3">
                <div class="w-100">
                    <label class="">Nomor telepon</label>
                    <input type="number" name="phone" class="form-control rounded-3" value="{{Auth::user()->phone}}">
                </div>
                <div class="w-100">
                    <label class="">Tanggal lahir</label>
                    <input type="date" name="bday" class="form-control rounded-3" value="{{Auth::user()->bday}}">
                </div>
            </div>
            <div class="d-flex flex-row d-grid gap-3 mb-3">
                <div class="w-100">
                    <label class="">Alamat</label>
                    <input type="text" name="address" class="form-control rounded-3" value="{{Auth::user()->address}}">
                </div>
                <div class="w-100">
                    <label class="">Jenis Kelamin</label>
                    <input type="option" name="gender" class="form-control rounded-3" value="{{Auth::user()->gender}}">
                </div>
            </div>
            <hr>
            <div class="d-flex flex-row d-grid gap-3 mb-3">
                <div class="w-100">
                    <label class="">Usia</label>
                    <input type="number" name="address" class="form-control rounded-3" value="{{Auth::user()->address}}">
                </div>
                <div class="w-100">
                    <label class="">Tinggi Badan</label>
                    <input type="number" name="gender" class="form-control rounded-3" value="{{Auth::user()->gender}}">
                </div>
                <div class="w-100">
                    <label class="">Berat Badan</label>
                    <input type="number" name="gender" class="form-control rounded-3" value="{{Auth::user()->gender}}">
                </div>
            </div>
            <div>
                <button class="btn btn-primary px-5 mt-3">Edit</button>
            </div>
        </div>
    </div>
    <!-- Content -->
</section>

@endsection