<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.landing') }}"><b><span style="color: brown;">Medeecare</span></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Manage User</a>
                <a class="nav-link" href="{{ "route('notification.settings')" }}">Notifikasi</a>
                <a class="nav-link" href="{{ route('logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->