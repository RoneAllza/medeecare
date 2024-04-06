<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top p-2 bg-light border-bottom">
    <div class="container-fluid mx-3">
        <a class="navbar-brand fs-3" href="/">
            <!-- medeecare -->
            <img src="{{url('assets/img/logo merah.png')}}" alt="medeecare">
        </a>
        <form class="d-flex d-none d-md-block" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar" aria-controls="offcanvasLightNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasLightNavbar" aria-labelledby="offcanvasLightNavbarLabel">
            <div class="offcanvas-header border-bottom">
                @if(Auth::check())
                <div class="d-flex flex-row align-items-center">
                    <a href="">
                        <img src="/assets/img/" style="height: 5vh; width: 5vh; border-radius:50%; object-fit-cover;" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" >Forum Diskusi Kesehatan</a></li>
                        <li><a class="dropdown-item" href="#" >Rujuk Rumah Sakit</a></li>
                        <li><a class="dropdown-item" href="#" >Informasi Penyakit</a></li>
                    </ul>
                </li>
            </ul>
            <!-- <a type="button" href="{{route ('login')}}" class="btn me-4 text-dark">Sign in</a>
            <button type="button" class="btn btn-danger">Sign up</button> -->
            @if(Auth::check())
                <!-- Jika pengguna sudah login -->
                <div class="d-flex">
                    <a href="" class="btn me-4 text-dark">{{Auth::user()->name}}</a>
                    <a type="button" href="{{url('/Logout')}}" class="btn btn-danger">Logout</a>
                </div>
            @else
                <!-- Jika pengguna belum login -->
                <a type="button" href="{{route('login')}}" class="btn me-3 text-danger btn-light btn-outline-danger">Sign in</a>
                <button type="button" class="btn btn-danger">Sign up</button>
            @endif
        </div>
        @endif
    </div>
</nav>
<!-- End Navbar -->