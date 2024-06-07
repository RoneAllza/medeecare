<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medeecare - Informasi Resiko Penyakit Jantung</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('asset/front-end/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('asset/front-end/css/menu.css')}}">
    <!-- <link rel="stylesheet" href="{{url('asset/front-end/css/reservation.css')}}"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>
@include('layouts.jantungan.navbar')

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white p-3 mt-4">
        <div class="container">
            <p>&copy; 2024 Medeecare. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
