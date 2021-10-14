<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome!</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
        <link rel="shortcut icon" href="assets/img/monpkl.jpeg" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/akmal.css') }}">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        {{-- <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
            {{-- <h1>ini halaman landing page</h1> --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-purple">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <div class="login-brand">
                        <img src="assets/img/monpkl.jpeg" alt="logo" width="60" class="shadow-light rounded-circle">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Disabled</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-sm btn-info">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="bg-login btn btn-sm mr-2 font-monospace">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-regis btn btn-sm ml-2 font-monospace">Register</a>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-2">
            <div class="row">
                <div class="col-4 mt-5">
                    <img src="assets/img/undraw2.png" alt="" class="img-fluid">
                </div>
                <div class="col-4 mt-5">
                    <h1 class="h1hero">
                        <b>CARA MUDAH <span class="monitoring ml-5">MONITORING</span> <br>
                        KEGIATAN <br> <span class="monitoring ml-5">PRAKERIN</span> <br> SISWA</b>
                    </h1>
                </div>
                <div class="col-4 mt-5">
                    <img src="assets/img/undraw.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>






        <!-- General JS Scripts -->
        <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/modules/popper.js') }}"></script>
        <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
        <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/stisla.js') }}"></script>
        
        <!-- JS Libraies -->

        <!-- Page Specific JS File -->
        
        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
