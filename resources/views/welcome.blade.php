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
        <nav class="navbar navbar-expand-lg navbar-light bg-purple fixed-top">
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
                            <a class="nav-link text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#tawarkan">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Disabled</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-sm btn-info font-monospace bg-home">Home</a>
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

        <div id="particles-js"></div>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mt-5">
                    <div class="mt-5"></div>
                    <div class="mt-5"></div>
                    <div class="alert alert-purple mt-2" role="alert">
                        Monitoring Prakerin Anti Ruwet!
                    </div>
                    <h1 class="h1hero">
                        <b>CARA MUDAH <span class="monitoring">MONITORING</span> <br>
                            KEGIATAN <span class="monitoring">PRAKERIN</span> <span class="siswa">SISWA</span></b>
                    </h1>
                    
                    <div class="d-flex flex-row justify-content-start mt-5">
                        <div class="mr-1">
                            <a href="/login">
                                <button class="btn btn-lg btn-mulai mr-1">Mulai!</button><i class='bx bx-chevrons-down bx-md bx-fade-down' style="color: #A12568"></i>
                            </a>
                        </div>

                        <div class="ml-1">
                            <a href="#tawarkan">
                                <button class="btn btn-lg btn-pelajari mr-2">Pelajari</button><i class='bx bx-search-alt-2 bx-md bx-fade-down' style="color: #00C1D4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt-5">
                    <img src="assets/img/undraw2.png" alt="" class="img-fluid" style="opacity: .9;">
                </div>
            </div>
        </div>

        <div id="tawarkan-particles"></div>
        <div class="container tawarkan">
            <div class="row mt-5 mb-1">
                <div class="col-12 text-center mt-5">
                    <h1 id="tawarkan">Apa yang kami tawarkan?</h1>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/company.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/teacher.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Guru</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/student.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Siswa</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/mentor.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pembimbing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/company-detail.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Detail Perusahaan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
                </div>
                <div class="card col-md-4 col-lg-3 col-sm-12 mx-3 my-3 p-3 monpkl-card" style="width: 20rem;">
                    <img class="card-img-top" height="180px" src="{{ asset('assets/img/info-prakerin.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Info Prakerin</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/login" class="btn btn-primary">Mulai</a>
                    </div>
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
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/particles.js') }}"></script>
    </body>
</html>
