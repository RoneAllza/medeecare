@extends('layouts.homepage.layout')

@section('content')

<!-- Banner -->
<section id="banner" class="mb-5" style="height: 70vh; width:100%; position:relative;">
    <div class="d-none d-lg-block">
<<<<<<< Updated upstream
        <img src="{{url('assets/img/banner arya.png')}}" class="w-100 h-100" style="position:absolute; object-fit:cover; z-index: -1; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2)" alt="">
=======
        <img src="{{url('assets/img/banner.png')}}" class="w-100 h-100" style="position:absolute; object-fit:cover; z-index: -1; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.1)" alt="">
>>>>>>> Stashed changes
    </div>
    <div class="container h-100 d-flex flex-column justify-content-center" style="padding: 10vh 0">
        @guest
        <h1 class="mb-3">Ayo Cek Kesehatanmu!</h1>
        @else
        <h1 class="mb-3">Selamat Datang, {{Auth::user()->name}}!</h1>
        @endguest
        <div class="mb-5 w-50">
            <p class="fs-5">Anda dapat menggunakan <span style="color: #B6252A;">medeecare</span> untuk memeriksa kondisi kesehatan anda, mendapatkan informasi medis, dan akses kesehatan secara online.</p>
        </div>
        @guest
        <div class="d-flex flex-row w-50 d-grid gap-5 h-25 mb-5 ">
            @foreach($features as $feature)
            <a href="{{route('login')}}" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center" style="width: 100px;">
                    <img src="/assets/img/{{$feature->photo}}" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" alt="{{$feature->name}}">
                    <div class="d-flex flex-row align-items-center text-dark text-center text-wrap" style="height:5vh; word-break: break-word">{{$feature->name}}</div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="d-flex flex-row w-50 d-grid gap-5 h-25 mb-5 ">
            @foreach($features as $feature)
            <a href="{{$feature->link}}" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center" style="width: 100px;">
                    <img src="/assets/img/doctor.png" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" class="" alt="">
                    <div class="d-flex flex-row align-items-center text-dark text-center text-wrap" style="height:5vh; word-break: break-word">Cek Mental</div>
                </div>
            </a>
            @endforeach
        </div>
<<<<<<< Updated upstream
        <button type="button" class="btn btn-outline-danger">Selengkapnya</button>
=======
        @endguest
        @guest
        <div>
            <a role="button" class="btn btn-danger " href="{{route('login')}}">Selengkapnya</a>
        </div>
        @else
        <div>
            <a role="button" class="btn btn-danger " href="{{route('feature')}}">Selengkapnya</a>
        </div>
        @endguest
>>>>>>> Stashed changes
    </div>
</section>
<!-- End Banner -->

<!-- Artikel -->
<section id="artikel" class="my-5">
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h2 class="mb-2">Artikel Kesehatan</h2>
            <a href="" class="text-decoration-none">Lihat Semua</a>
        </div>
        <div>
            <ul class="d-flex flex-row py-3 ps-0" style="overflow-x: auto;">
                <li class="rounded px-2 py-1" style="text-wrap: nowrap; margin-right: 1rem;list-style: none;background-color: #B6252A;color: white;">
                    <a href="" style="text-decoration: none; color:white">asdasdasd</a>
                </li>
            </ul>
        </div>
        @guest
        <div class="d-flex flex-row d-grid gap-5" style="overflow-x: auto; scrollbar-width: none">
            <a href="{{route('login')}}" class="text-decoration-none hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <hr class="">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
        </div>
        @else
        <div class="d-flex flex-row d-grid gap-5" style="overflow-x: auto; scrollbar-width: none">
            <a href="" class="text-decoration-none hover-overlay shadow-1-strong rounded" data-mdb-ripple-init data-mdb-ripple-color="light">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
        </div>
        @endguest
    </div>
</section>
<!-- End Artikel -->

<!-- Footer -->
<footer class="footer border-top" style="background-color: #B6252A;">
    <div class="container-fluid text-light">
        <div class="d-flex flex-row">
            <div class="col-12 col-md-3 mx-auto mb-4 mt-5 ">
                <h5 class="fw-bold mb-4">Layanan Pengaduan Konsumen</h5>
                <h6 class="fw-bold ">Telkomedika Head Office</h6>
                <p class="flex-fill">Gedung OPMC Telkom, Jl. Letjen Suprapto No.17, RT.9/RW.7, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510</p>
            </div>
            <div class="col-12 col-md-3 mx-auto mb-4 mt-5 ">
                <h5 class="fw-bold mb-4">Sosial Media</h5>
                <div class="d-flex flex-row align-items-center justify-content-start d-grid gap-3">
                    <a href="https://www.instagram.com/telkomedika/" class="text-light"><i class="fa-brands fa-instagram fa-2x "></i></a>
                    <a href="https://www.facebook.com/mytelkomedika/" class="text-light"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="https://www.youtube.com/channel/UCju_kRKXrDOKqmrB8wNCaWw/featured" class="text-light"><i class="fa-brands fa-youtube fa-2x"></i></a>
                    <a href="https://twitter.com/TelkoMedika" class="text-light"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=628112473069&text&type=phone_number&app_absent=0" class="text-light"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

@endsection