@extends('layouts/master')

@section('title', 'Profil Siswa')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $student->namaSiswa }}</h1>
        </div>
    </section>

        <div class="section-body">
            <a href="/students" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

            <p class="section-lead">
            Informasi Seputar Siswa Bernama {{ $student->namaSiswa }}
            </p>

            <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">                     
                        <img alt="image" src="{{ asset('images') }}/{{ $student->photoSiswa }}" class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">NIS</div>
                            <div class="profile-widget-item-value">{{ $student->nis }}</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Kelas</div>
                            <div class="profile-widget-item-value">{{ $student->kelas }}</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Jurusan</div>
                            <div class="profile-widget-item-value">{{ $student->kompetensiKeahlian }}</div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2">
                        <img class="mb-4" id="previewImgParaf" src="{{ asset('images') }}/{{ $student->parafSiswa }}" width="120px" height="120px">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                    <h4>Info Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                            <div class="form-group col-md-6 col-12">
                                <label>Nama</label>
                                <input type="text" class="form-control" disabled value="{{ $student->namaSiswa }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" disabled value="{{ $student->tempatLahir }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" disabled value="{{ $student->tanggalLahir }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control" disabled value="{{ $student->noHP }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Nomor HP Orangtua</label>
                                <input type="text" class="form-control" disabled value="{{ $student->noHpOrtu }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Nama Orangtua</label>
                                <input type="text" class="form-control" disabled value="{{ $student->namaOrtu }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Email</label>
                                <input type="text" class="form-control" disabled value="{{ $student->email }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Tahun Ajaran</label>
                                <input type="text" class="form-control" disabled value="{{ $student->tahunPelajaran }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Mulai PKL</label>
                                <input type="text" class="form-control" disabled value="{{ $student->tglMulaiPKL }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Selesai PKL</label>
                                <input type="text" class="form-control" disabled value="{{ $student->tglSelesaiPKL }}">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" disabled value="{{ $student->jenisKelamin }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Golongan Darah</label>
                                <input type="text" class="form-control" disabled value="{{ $student->golDarah }}">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Alamat Siswa</label>
                                <textarea class="form-control" disabled aria-label="With textarea">{{ $student->alamat }}</textarea>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Alamat Orangtua</label>
                                <textarea class="form-control" disabled aria-label="With textarea">{{ $student->alamatOrtu }}</textarea>
                            </div>         
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/students-edit/{{ $student->id }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection
