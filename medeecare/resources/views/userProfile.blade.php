@extends('layouts.homepage.layout')

@section('content')

<section class="container" style="height: calc(100vh - 77px);">
    <!-- Content -->
    <form action="{{route ('updateProfile')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex flex-row grid gap-5">
            <div class="card w-25 h-50 text-center shadow bg-body-tertiary mt-5">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">{{Auth::user()->name}}</h5>
                    <p class="m-0">{{Auth::user()->email}}</p>
                    <img src="/photoprofile/{{Auth::user()->photo}}" class="border m-3" alt="{{Auth::user()->photo}}" style="height:16vh; width:16vh;border-radius:50%; object-fit-cover;">
                    <div class="mb-3">
                        <input type="file" class="d-none" id="upload" name="photo" accept="image/*" onchange="form.submit()">
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
                        <select name="gender" class="form-control rounded-3">
                            <option value="" {{ empty(Auth::user()->gender) ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                            @foreach(['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'] as $value => $label)
                            <option value="{{ $value }}" {{ Auth::user()->gender === $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-row d-grid gap-3 mb-3">
                    <div class="w-100">
                        <label class="">Usia</label>
                        <input type="number" name="age" class="form-control rounded-3" value="{{Auth::user()->age}}">
                    </div>
                    <div class="w-100">
                        <label class="">Tinggi Badan</label>
                        <input type="number" name="tb" class="form-control rounded-3" value="{{Auth::user()->tb}}">
                    </div>
                    <div class="w-100">
                        <label class="">Berat Badan</label>
                        <input type="number" name="bb" class="form-control rounded-3" value="{{Auth::user()->bb}}">
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary px-5 mt-3" type="submit">Edit</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Content -->
</section>

@endsection