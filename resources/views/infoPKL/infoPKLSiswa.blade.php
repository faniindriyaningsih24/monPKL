@extends('layouts.master')

@section('title', 'Info PKL Siswa')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Info PKL Siswa</h1>
      </div>

      <div class="section-body">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card author-box card-primary">
            {{-- <div class="card-body">
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
            </div> --}}
          </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>Info PKL</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p>Mulai PKL : {{ $cmpDetail->tglMulaiPKL }}</p>
                        <p>Selesai PKL : </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Info Perusahaan</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                         </tbody>
                        </table>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Info Mentor / Pebimbing Perusahaan</h4>
                  </div>
                  <div class="card-body">
                    <p>Card <code>.card-success</code></p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Info Guru Pebimbing</h4>
                  </div>
                  <div class="card-body">
                    <p>Card <code>.card-success</code></p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection