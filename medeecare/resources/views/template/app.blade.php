<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Informasi Penyakit</title>

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
            <div class="nav-title" style="margin-left: 30px;">
                <h5 class="logo-text" style="color: #8B0C0C; font-size: 24px; margin: 0;">Medeecare</h5>
            </div>
                    <!-- nav -->
                    @stack('nav')
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <form action="{{ route('informasipenyakit') }}" method="GET">
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                        <div class="search-form">
                            <input class="search-input" type="text" name="search" placeholder="Search for articles..." required>
                            <button class="search-close"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    </form>
                    
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
            <div class="col-md-5">
                <div class="footer-widget">
                    <h5 class="footer-title" style="color: #8B0C0C;">Medeecare</h5>
                    <ul class="footer-nav">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-title">About Us</h3>
                    <ul class="footer-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Join Us</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Join our Newsletter</h3>
            <div class="footer-newsletter">
                            <form>
                                <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /Footer -->

    <!-- jQuery Plugins -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>

