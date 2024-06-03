<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><b><span style="color: brown;">Medeecare</span></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-link" href="{{ url('/heart-disease-risk') }}">Informasi Resiko Penyakit Jantung</a>
                    <a class="nav-link" href="{{ url('/medication-recommendation') }}">Rekomendasi Obat-Obatan</a>
                    <a class="nav-link" href="{{ url('/heart-disease-calculator') }}">Kalkulator Resiko Penyakit Jantung</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->