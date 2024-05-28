<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservasi Nomor Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <style>
        h1, h2, h6 { text-align: center; }
        h3 { text-align: left; }
        .form-check { display: flex; align-items: center; }
        .form-check-input { margin-right: 5px; }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: rgb(163, 38, 56); font-size: large;" href="#">medeecare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Form Reservasi Nomor Antrian</h2>

        <p class="py-3">
        <form method="post" action="{{ route('submit-reservasi') }}">
        @csrf
            <div class="mb-3 row">
                <label for="inputNamaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="Nama Lengkap">
                </div>
            </div>

            <p class="py-1">
            <div class="mb-3 row">
                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Sesuai dengan KTM" aria-label="NIM">
                </div>
            </div>

            <p class="py-1">
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Masukkan email yang aktif" aria-label="Email">
                </div>
            </div>

            <p class="py-1">
            <div class="mb-3 row">
                <label for="inputGejala" class="col-sm-2 col-form-label">Gejala</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="Gejala">
                </div>
            </div>

            <p class="py-1">
            <div class="mb-3 row">
                <label for="inputJam" class="col-sm-2 col-form-label">Jam Konsultasi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Jam Konsultasi">
                        <option selected>Pilih Jam</option>
                        <option value="1">08.00 - 08.30</option>
                        <option value="2">09.00 - 09.30</option>
                        <option value="3">10.30 - 11.00</option>
                        <option value="4">11.15 - 11.40</option>
                        <option value="5">13.00 - 13.30</option>
                        <option value="6">14.30 - 15.00</option>
                        <option value="7">16.25 - 16.50</option>
                        <option value="8">17.15 - 17.40</option>
                        <option value="9">18.00 - 18.30</option>
                    </select>
                </div>
            </div>

    <p class="py-1">
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
            <a href="/reservasi/resume" class="btn btn-outline-primary">Selanjutnya</a>
        </div>
    </div>
</div>
</form>
</div>
</body>
</html>
