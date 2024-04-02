<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top p-2 bg-light border-bottom"     >
    <div class="container-fluid mx-3">
        <a class="navbar-brand fs-3" href="">
            <!-- medeecare -->
            <img src="{{url('assets/img/logo merah.png')}}" alt="medeecare">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <form class="d-flex" role="search">
                <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav me-auto fs-6">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservasi Nomor Antrian</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" >Forum Diskusi Kesehatan</a></li>
                        <li><a class="dropdown-item" href="#" >Rujuk Rumah Sakit</a></li>
                        <li><a class="dropdown-item" href="#" >Informasi Penyakit</a></li>
                    </ul>
                </li>
            </ul>
            <a type="button" href="{{route ('login')}}" class="btn me-4 text-dark">Sign in</a>
            <button type="button" class="btn btn-danger">Sign up</button>
        </div>
    </div>
</nav>
<!-- End Navbar -->