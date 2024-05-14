<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kesehatan Mental</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
            <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <!-- Logo -->
            <div class="nav-logo">
                <a href="/" class="logo"><img src="logo.png" alt=""></a>
            </div>
            <!-- /Logo -->

            <!-- Tulisan "Medeecare" -->
            <div class="nav-title" style="margin-left: 0; position: absolute; left: 0;">
                <h5 class="logo-text" style="color: #8B0C0C; font-size: 24px; margin: 0;">Medeecare</h5>
            </div>
                    <!-- nav -->
                    @stack('nav')
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <!-- <form action="{{ route('kesehatanmental.search') }}" method="GET">
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    </form> -->
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')

    <!-- jQuery Plugins -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>

