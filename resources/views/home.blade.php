@extends('layouts.master')

@section('title', 'Home')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Home monPKL</h1>
      </div>

      <div class="section-body">
        <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5><br>

        <div class="row d-flex flex-wrap justify-content-center">
          <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 py-4 p-3 monpkl-card rounded" style="width: 20rem;">
              <img class="card-img-top" height="180px" src="{{ asset('assets/img/company.png') }}" alt="Card image cap">
              <div class="card-body text-center">
                  <h5 class="card-title">Jumlah Perusahaan</h5>
                  <p class="card-text"><h1>{{ $perusahaan }}</h1></p>
                  <a href="/companies" class="btn btn-primary">Lihat</a>
              </div>
          </div>
          <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 py-4 p-3 monpkl-card rounded" style="width: 20rem;">
              <img class="card-img-top" height="180px" src="{{ asset('assets/img/teacher.png') }}" alt="Card image cap">
              <div class="card-body text-center">
                  <h5 class="card-title">Jumlah Guru</h5>
                  <p class="card-text"><h1>{{ $guru }}</h1></p>
                  <a href="/teachers" class="btn btn-primary">Lihat</a>
              </div>
          </div>
          <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 py-4 p-3 monpkl-card rounded" style="width: 20rem;">
              <img class="card-img-top" height="180px" src="{{ asset('assets/img/student.png') }}" alt="Card image cap">
              <div class="card-body text-center">
                  <h5 class="card-title">Jumlah Siswa</h5>
                  <p class="card-text"><h1>{{ $siswa }}</h1></p>
                  <a href="/students" class="btn btn-primary">Lihat</a>
              </div>
          </div>
          <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 py-4 p-3 monpkl-card rounded" style="width: 20rem;">
              <img class="card-img-top" height="180px" src="{{ asset('assets/img/mentor.png') }}" alt="Card image cap">
              <div class="card-body text-center">
                  <h5 class="card-title">Jumlah Mentor</h5>
                  <p class="card-text"><h1>{{ $mentor }}</h1></p>
                  <a href="/mentors" class="btn btn-primary">Lihat</a>
              </div>
          </div>
          <div class="card col-md-4 col-lg-3 col-sm-12 mx-4 py-4 p-3 monpkl-card rounded" style="width: 20rem;">
              <img class="card-img-top" height="180px" src="{{ asset('assets/img/info-prakerin.png') }}" alt="Card image cap">
              <div class="card-body text-center">
                  <h5 class="card-text">Jumlah Prakerin</h5>
                  <p class="card-text"><h1>{{ $prakerin }}</h1></p>
                  <a href="/infoPKL" class="btn btn-primary">Lihat</a>
              </div>
          </div>
      </div>

      </div>
    </section>
</div>
@endsection