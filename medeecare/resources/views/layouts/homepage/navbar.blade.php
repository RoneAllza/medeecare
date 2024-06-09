<style>
    .search-results-container {
        position: relative;
    }

    #search-results {
        position: absolute;
        width: 100%;
        z-index: 1000;
        max-height: 200px;
        overflow-y: auto;
    }
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top p-2 bg-light border-bottom">
    <div class="container-fluid mx-3">
        <a class="navbar-brand fs-3" href="/">
            <!-- medeecare -->
            <img src="{{url('assets/img/logo merah.png')}}" alt="medeecare">
        </a>
        <div class="search-results-container">
            <form class="d-flex d-none d-md-block" role="search">
                <input class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
            </form>
            <div id="search-results" class="list-group"></div>
        </div>
        <div id="search-results" class="list-group position-absolute"></div>
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
                    <p class="ms-2 mb-0 fs-5">{{Auth::user()->name}}</p>
                </div>
                @else
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #B6252A;">medeecare</h5>
                @endif
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- <div class="offcanvas-body d-flex flex-column">
                <ul class="navbar-nav me-auto fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservasi Nomor Antrian</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/diabetes-risk">Layanan Diabetes</a></li>
                            <li><a class="dropdown-item" href="/heart-disease-risk">Layanan Resiko Jantung</a></li>
                            <li><a class="dropdown-item" href="#">Informasi Penyakit</a></li>
                            <li><a class="dropdown-item" href="/TestCovid">Cek Indikasi Covid-19</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="/ArticleCovid">Artikel</a>
                    </li>
                    @if(Auth::check())
                    <li><a class="nav-link d-lg-none" href="{{ route('logout') }}">Sign out</a></li>
                    @endif
                </ul>
            </div> -->
        </div>
        @if(Auth::check())
        <div class="d-flex align-items-center d-none d-lg-block">
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" name="profile-img">
                <img src="/photoprofile/{{Auth::user()->photo}}" style="height: 5vh; width: 5vh; border-radius:50%; object-fit-cover;">
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
            <a href="{{route('login')}}" class="btn btn-danger">Sign in</a>
        </div>
        @endif
    </div>
</nav>
<!-- End Navbar -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('input', function() {
            var query = $(this).val();
            if (query.length >= 1) {
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        $('#search-results').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, result) {
                                // Menggunakan result.link untuk membuat tautan
                                var link = result.link ? result.link : '#';
                                $('#search-results').append('<a href="' + link + '" class="list-group-item list-group-item-action">' + result.name + '</a>');
                            });
                            $('#search-results').dropdown('show');
                        } else {
                            $('#search-results').append('<div class="list-group-item">No results found</div>');
                            $('#search-results').dropdown('show');
                        }
                    }
                });
            } else {
                $('#search-results').empty();
            }
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#search, #search-results').length) {
                $('#search-results').empty();
            }
        });
    });
</script>
