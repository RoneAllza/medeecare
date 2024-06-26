<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top p-2 bg-light border-bottom">
    <div class="container-fluid mx-3">
        <a class="navbar-brand fs-3" href="/">
            <img src="{{url('assets/img/logo merah.png')}}" alt="medeecare">
        </a>
        
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasLightNavbar" aria-labelledby="offcanvasLightNavbarLabel">
            <div class="offcanvas-header border-bottom">
                @if(Auth::check())
                <div class="d-flex flex-row align-items-center">
                    <a href="">
                        <img src="/assets/img/{{ Auth::user()->photo }}" style="height: 5vh; width: 5vh; border-radius:50%; object-fit-cover;" alt="">
                    </a>
                    <p class="ms-2 mb-0 fs-5">{{ Auth::user()->name }}</p>
                </div>
                @else
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #B6252A;">medeecare</h5>
                @endif
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column">
                <ul class="navbar-nav me-auto fs-6">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/diabetes-risk') }}">Resiko Diabetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/heart-disease-risk') }}">Resiko Jantung</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/diabetes-test') }}">Tes Resiko Diabetes</a></li>
                            <li><a class="dropdown-item" href="{{ url('/lifestyle-recommendation') }}">Rekomendasi Pola Makan dan Gaya Hidup Sehat</a></li>
                            <li><a class="dropdown-item" href="{{ url('/diabetes-prevention') }}">Informasi Pencegahan Diabetes</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                    <li><a class="nav-link d-lg-none" href="{{ route('logout') }}">Sign out</a></li>
                    @endif
                </ul>
            </div>
        </div>
        @if(Auth::check())
        <div class="d-flex align-items-center d-none d-lg-block">
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/photoprofile/{{ Auth::user()->photo }}" style="height: 5vh; width: 5vh; border-radius:50%; object-fit-cover;">
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa-solid fa-user" style="width: 3vh;"></i>Your Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket" style="width: 3vh;"></i>Sign out</a></li>
            </ul>
        </div>
        @else
        <div class="d-flex flex-row align-items-center d-none d-lg-block">
            <a type="button" href="{{ route('login') }}" class="btn btn-danger">Sign in</a>
        </div>
        @endif
    </div>
</nav>
<!-- End Navbar -->
