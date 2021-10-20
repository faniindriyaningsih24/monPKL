@extends('layouts.master')

@section('title', 'Home Siswa')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Home Siswa</h1>
      </div>

      <div class="section-body">
        <h5>Saya Siswa Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5><br>
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-center" style="    float: left !important;
              width: 15% !important">
                <img alt="image" src="{{ asset("images") }}/{{ $siswa->photoSiswa }}" class="rounded-circle author-box-picture">
              </div>
              <div class="author-box-details" style="    float: left !important;
              width: 75% !important">
                
                @if($cmpDetail<>"")
                <div class="author-box-name">
                  {{ $cmpDetail->namaSiswa }}
                </div>
                <div class="author-box-job">{{ $cmpDetail->namaPerusahaan }}</div>
                <div class="author-box-description">
                  <table>
                      <tr>
                          <td>Tgl Mulai PKL</td>
                          <td>{{ $cmpDetail->tglMulaiPKL }}</td>
                      </tr>
                      <tr>
                        <td>Tgl Selesai PKL</td>
                    </tr>
                  </table>
                </div>
                @else
                <div class="author-box-name">
                  Anda Belum mendapatkan Perusahaan, <br>Silahkan Menguhubungi Admin
                </div>
                <div class="author-box-job"></div>
                <div class="author-box-description">
                  
                </div>
                @endif

                <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Follow Hasan On</div></div>
                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <div class="w-100 d-sm-none"></div>
                <div class="float-right mt-sm-0 mt-3">
                  <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection