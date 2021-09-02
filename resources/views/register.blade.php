<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>monPKL || Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
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
        <section class="section">
          <div class="container mt-5">
            <div class="row">
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                  <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>
    
                <div class="card card-primary">
                  <div class="card-header"><h4>Register</h4></div>
    
                  <div class="card-body">
                    <form method="post" action="{{ route('register') }}" class="needs-validation" novalidate="">
                        @csrf

                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                      <div class="form-group">
                        <label for="">Full Name</label>
                        <input id="" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your full name
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Email</label>
                        <input id="" type="email" class="form-control" name="email" tabindex="2">
                        <div class="invalid-feedback">
                          Please fill in your email
                        </div>
                      </div>
    
                      <div class="form-group">
                        <div class="d-block">
                            <label for="" class="control-label">Password</label>
                        </div>
                        <input id="" type="password" class="form-control" name="password" tabindex="3">
                        <div class="invalid-feedback">
                          please fill in your password
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Level</label>
                        <input id="" type="text" class="form-control" name="idLevel" tabindex="4" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your level
                        </div>
                      </div>
                      
    
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="5">
                          Register
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="mt-5 text-muted text-center">
                  Have an account? <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="simple-footer">
                  Copyright &copy; Stisla 2018
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>