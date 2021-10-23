<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>monPKL || @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

  <link rel="shortcut icon" src="{{ url('assets/img/monpkl.jpeg') }}" type="image/x-icon">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {{-- <link rel="stylesheet" href="assets/css/components.css"> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"></div>
              <a href="{{ Session::get('url') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile - 

                <!-- Start Setting Level Name  -->
                @if (auth()->user()->level == "admin")
                    Admin
                @elseif (auth()->user()->level == "guru")
                  Guru
                @elseif (auth()->user()->level == "mentor")
                  Mentor
                @elseif (auth()->user()->level == "siswa")
                  Siswa
                @endif
                <!-- End Setting Level Name  -->

              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            @if (auth()->user()->level == "siswa")
              <a href="{{ route('home_siswa') }}">
              <img src="{{ url('assets/img/monpkl.jpeg') }}" alt="logo" class="rounded-circle" width="70px">
              monPKL
              </a>    
            @else
              <a href="{{ route('home') }}">
              <img src="{{ url('assets/img/monpkl.jpeg') }}" alt="logo" class="rounded-circle" width="70px">
              monPKL
              </a>
            @endif
                
          </div>
          <!-- Menu  -->
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">mon</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            @if (auth()->user()->level == "siswa")
              <li><a class="nav-link" href="{{ route('home_siswa') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            @else
              <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            @endif
            <li class="menu-header">Pages</li>
        
            <!-- Start setting navigation  -->
            @if (auth()->user()->level == "admin")
              <li><a class="nav-link" href="/companies"><i class="fas fa-building"></i> <span>Perusahaan</span></a></li>
              <li><a class="nav-link" href="/students"><i class="fas fa-user-graduate"></i> <span>Siswa</span></a></li>
              {{-- <li><a class="nav-link" href="/students/importView"><i class="fas fa-user-graduate"></i> <span>Import Data Siswa</span></a></li> --}}
              <li><a class="nav-link" href="/mentors"><i class="fas fa-people-carry"></i> <span>Mentor</span></a></li>
              <li><a class="nav-link" href="/teachers"><i class="fas fa-chalkboard-teacher"></i> <span>Guru</span></a></li>
              <li><a class="nav-link" href="/company-detail"><i class="fas fa-city"></i> <span>Detail Perusahaan</span></a></li>
              <li><a class="nav-link" href="/infoPKL"><i class="fas fa-building"></i> <span>Info PKL</span></a></li>
            @elseif(auth()->user()->level == "guru")
              <li><a class="nav-link" href="/infoPKL/infoPKLTeachers"><i class="fas fa-building"></i> <span>Info PKL</span></a></li>
            @elseif(auth()->user()->level == "mentor")
              <li><a class="nav-link" href="/infoPKL/infoPKLMentor"><i class="fas fa-building"></i> <span>Info PKL</span></a></li>
              <li><a class="nav-link" href="/presensi"><i class="fas fa-building"></i> <span>Acc Presensi</span></a></li>
              <li><a class="nav-link" href="/journal"><i class="fas fa-building"></i> <span>Acc Jurnal</span></a></li>
            @elseif(auth()->user()->level == "siswa") 
              <li><a class="nav-link" href="infoPKL/infoPKLSiswa"><i class="fas fa-building"></i> <span>Info PKL</span></a></li>
              <li><a class="nav-link" href="/presensi"><i class="fas fa-building"></i> <span>Presensi</span></a></li>
              <li><a class="nav-link" href="/journal"><i class="fas fa-building"></i> <span>Jurnal</span></a></li>
            @endif
            <!-- End setting navigation  -->
            
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      @yield('container')
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">
        
      </div>
    </footer>
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
  <script>

  var loadFile = function(event) {
    var image = document.getElementById('previewImgPas');
    image.src = URL.createObjectURL(event.target.files[0]);
  };

  var loadFile2 = function(event) {
    var image = document.getElementById('previewImgParaf');
    image.src = URL.createObjectURL(event.target.files[0]);
  };

  $(function(){
    var url = document.location.toString();
    if (url.match('#')) {
      console.log(url.split('#')[1]);
      $('a[href="#'+url.split('#')[1]+'"]').parent().addClass('active');
      $('#'+url.split('#')[1]).addClass('active in')
    }
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      window.location.hash = e.target.hash;
    });
  });
  </script>
</body>
</html>