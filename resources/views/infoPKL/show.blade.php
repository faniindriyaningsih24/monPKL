@extends('layouts/master')

@section('title', 'Informasi PKL - Presensi')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi PKL - Presensi</h1>
        </div>
    </section>

    <div class="section-body">
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}

        {{-- <a href="journal/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a> --}}
        <a href="/infoPKL" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="biodata-tab" data-toggle="tab" href="#biodata" role="tab" aria-controls="biodata"
                        aria-selected="false">Biodata</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="presensi-tab" data-toggle="tab" href="#presensi" role="tab" aria-controls="presensi"
                        aria-selected="false">Presensi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="jurnal-tab" data-toggle="tab" href="#jurnal" role="tab" aria-controls="jurnal"
                        aria-selected="false">Jurnal</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show" id="biodata" role="tabpanel" aria-labelledby="biodata-tab">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="card profile-widget">
                        <div class="profile-widget-header">                     
                          <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                          <div class="profile-widget-items">
                            <div class="profile-widget-item">
                              <div class="profile-widget-item-value">{{ $siswa["namaSiswa"] }}</div>
                            </div>
                            <div class="profile-widget-item">
                              <div class="profile-widget-item-value">{{ $siswa["kompetensiKeahlian"] }} {{ $siswa["kelas"] }}</div>
                            </div>
                            <div class="profile-widget-item">
                              <div class="profile-widget-item-value">{{ $siswa["noHP"] }}</div>
                            </div>
                          </div>
                        </div>
                        <div class="profile-widget-description">
                          <div class="table-responsive">
                            <table class="table table-md">
                              <tr>
                                <td>Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $siswa["tempatLahir"] }}, {{ $siswa["tanggalLahir"] }}</td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $siswa["jenisKelamin"] }}</td>
                              </tr>
                              <tr>
                                <td>Golongan Darah</td>
                                <td>:</td>
                                <td>{{ $siswa["golDarah"] }}</td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $siswa["email"] }}</td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $siswa["alamat"] }}</td>
                              </tr>
                              <tr>
                                <td>Nama Orang Tua</td>
                                <td>:</td>
                                <td>{{ $siswa["namaOrtu"] }}</td>
                              </tr>
                              <tr>
                                <td>Alamat Orang Tua</td>
                                <td>:</td>
                                <td>{{ $siswa["alamatOrtu"] }}</td>
                              </tr>
                              <tr>
                                <td>No HP Orang Tua</td>
                                <td>:</td>
                                <td>{{ $siswa["noHpOrtu"] }}</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="presensi" role="tabpanel" aria-labelledby="presensi-tab">
                    <table class="table table-bordered">
                      <tr>
                          <th width="10px" class="text-center">No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Paraf Mentor</th>
                      </tr>
                      <?php $i=1; ?>
                      @foreach ($presensi as $row)
                      <tr>
                          <td class="text-center">{{ $i++ }}</td>
                          <td>{{ $row->created_at}}</td>
                          <td>
                              @if($row->keterangan==1)
                                   <img src="{{ asset("images") }}/{{ $row->parafSiswa }}" class="py-2" alt="" width="50px" height="60px">
                              @else
                                  Sakit / Izin
                              @endif
                          </td>
                          <td>
                              @if($row->setuju==1)
                                   <img src="{{ asset("images") }}/{{ $row->parafMentors }}" class="py-2" alt="" width="50px" height="60px">
                              @else
                                  Menunggu Persetujuan Mentor
                              @endif
                          </td>
                      </tr>
                      @endforeach
                  </table>
                  {{-- {{$presensi->links("pagination::bootstrap-4")}} --}}
                  </div>
                  <div class="tab-pane fade" id="jurnal" role="tabpanel" aria-labelledby="jurnal-tab">
                    {{-- @foreach (($journal) as $row)
                    {{ $row->uraianPekerjaan }}
                    @endforeach --}}
                    <table class="table">
                      <tr>
                          <th width="10px" class="text-center">No</th>
                          <th>Tanggal</th>
                          <th>Bidang Pekerjaan</th>
                          <th>Uraian Pekerjaan</th>
                          <th>Paraf Mentor</th>
                      </tr>
                      <?php $i=1; ?>
                      @foreach ($journal as $s)
                      <tr>
                          <td class="text-center">{{ $i++ }}</td>
                          <td>{{ $s->tanggalJurnal}}</td>
                          <td>{{ $s->bidangPekerjaan}}</td>
                          <td>{{ $s->uraianPekerjaan}}</td>
                          <td>
                              @if($s->setuju==1)
                                   <img src="{{ asset("images") }}/{{ $s->parafMentors }}" class="py-2" alt="" width="50px" height="60px">
                              @else
                                  Menunggu Persetujuan Mentor
                              @endif
                          </td>
                      </tr>
                      @endforeach
                  </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

