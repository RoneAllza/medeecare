@extends('layouts.homepage.layout')

@section('content')

<!-- Banner -->
<section id="banner" class="mb-5" style="height: 70vh; width:100%; position:relative;">
    <div class="d-none d-lg-block">
        <img src="{{url('assets/img/banner arya.png')}}" class="w-100 h-100" style="position:absolute; object-fit:cover; z-index: -1; box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2)" alt="">
    </div>
    <div class="container h-100" style="padding: 10vh 0">
        <h1 class="mb-3">Ayo Cek Kesehatanmu!</h1>
        <div class="mb-5 w-50">
            <p class="fs-5">Anda dapat menggunakan <span style="color: #B6252A;">medeecare</span> untuk memeriksa kondisi kesehatan anda, mendapatkan informasi medis, dan akses kesehatan secara online.</p>
        </div>
        <div class="d-flex flex-row w-50 d-grid gap-5 h-25 mb-5 ">
            <a href="#" style="" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center" style="width: 100px;">
                    <img src="/assets/img/doctor.png" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" class="" alt="">
                    <div class="d-flex flex-row align-items-center text-dark text-center text-wrap" style="height:5vh; word-break: break-word">Cek Mental</div>
                </div>
            </a>
            <a href="#" style="" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="/assets/img/doctor.png" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" class="" alt="">
                    <div class="d-flex flex-row align-items-center text-dark " style="height:5vh">Cek Stress</div>
                </div>
            </a>
            <a href="#" style="" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="/assets/img/doctor.png" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" class="" alt="">
                    <div class="d-flex flex-row align-items-center text-dark " style="height:5vh">Sehat</div>
                </div>
            </a>
            <a href="#" style="" class="text-decoration-none">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="/assets/img/doctor.png" style="height: 10vh; width: 10vh; border-radius:50%; object-fit-cover; filter: drop-shadow(0 0 0.75rem rgba(0, 0, 0, 0.2))" class="" alt="">
                    <div class="d-flex flex-row align-items-center text-dark " style="height:5vh">Sehat</div>
                </div>
            </a>
        </div>
        <button type="button" class="btn btn-outline-danger">Selengkapnya</button>
    </div>
</section>
<!-- End Banner -->

<!-- Artikel -->
<section id="artikel" class="mb-5" style="">
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
                <li class="rounded px-2 py-1" style="text-wrap: nowrap; margin-right: 1rem;list-style: none;background-color: #B6252A;color: white;">
                    <a href="" style="text-decoration: none; color:white">asdasdasd</a>
                </li>
                <li class="rounded px-2 py-1" style="text-wrap: nowrap; margin-right: 1rem;list-style: none;background-color: #B6252A;color: white;">
                    <a href="" style="text-decoration: none; color:white">asdasdasd</a>
                </li>
            </ul>
        </div>
        <div class="d-flex flex-row d-grid gap-5" style="overflow-x: auto">
            <a href="" class="text-decoration-none">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
            <a href="" class="text-decoration-none">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
            <a href="" class="text-decoration-none">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
            <a href="" class="text-decoration-none">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
            <a href="" class="text-decoration-none">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/doctor.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- End Artikel -->

<!-- Footer -->
<footer class="footer border-top">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 mx-auto mb-4 mt-5">
                <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                <p>@punten.coffee</p>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mx-auto mb-4 mt-5">
                <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                <p>@punten.coffee</p>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mx-auto mb-4 mt-5">
                <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                <p>@punten.coffee</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

@endsection