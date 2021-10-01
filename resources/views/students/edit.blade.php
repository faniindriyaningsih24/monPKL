@extends('layouts.master')

@section('title', 'Edit Siswa')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Siswa</h1>
        </div>

        <div class="section-body">
            <a href="/students" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="id" value="{{ $student->id }}">
                        <div class="card">
                                <div class="card-body">
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">NIS</label>
                                        <input type="text" class="form-control" placeholder="Nomor Induk Siswa" name="nis" value="{{ $student->nis }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" name="namaSiswa" value="{{ $student->namaSiswa }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text" for="inputGroupSelect01">Kompetensi Keahlian</label>
                                        <select name="kompetensiKeahlian" class="custom-select" id="inputGroupSelect02">
                                            {{-- <option selected disabled>Jurusan...</option> --}}
                                            <option value="MM" {{ ( $student->kompetensiKeahlian == "MM" ) ? "selected" : "" }}>MM</option>
                                            <option value="TKJ" {{ ( $student->kompetensiKeahlian == "TKJ" ) ? "selected" : "" }}>TKJ</option>
                                            <option value="SIJA" {{ ( $student->kompetensiKeahlian == "SIJA" ) ? "selected" : "" }}>SIJA</option>
                                            <option value="RPL" {{ ( $student->kompetensiKeahlian == "RPL" ) ? "selected" : "" }}>RPL</option>
                                            <option value="TOI" {{ ( $student->kompetensiKeahlian == "TOI" ) ? "selected" : "" }}>TOI</option>
                                            <option value="TP" {{ ( $student->kompetensiKeahlian == "TP" ) ? "selected" : "" }}>TP</option>
                                            <option value="BKP" {{ ( $student->kompetensiKeahlian == "BKP" ) ? "selected" : "" }}>BKP</option>
                                            <option value="DPIB" {{ ( $student->kompetensiKeahlian == "DPIB" ) ? "selected" : "" }}>DPIB</option>
                                            <option value="TFLM" {{ ( $student->kompetensiKeahlian == "TFLM" ) ? "selected" : "" }}>TFLM</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Mulai PKL</label>
                                        <input type="date" class="form-control" placeholder="Mulai PKL" name="tglMulaiPKL" value="{{ $student->tglMulaiPKL }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Selesai PKL</label>
                                        <input type="date" class="form-control" placeholder="Selesai PKL" name="tglSelesaiPKL" value="{{ $student->tglSelesaiPKL }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Kelas...</label>
                                        <select name="kelas" class="custom-select" id="inputGroupSelect01">
                                            {{-- <option selected disabled>Kelas</option> --}} {{ ( $student->golDarah == "A" ) ? "selected" : "" }}
                                            <option value="X" {{ ( $student->kelas == "X" ) ? "selected" : "" }}>X</option>
                                            <option value="XI" {{ ( $student->kelas == "XI" ) ? "selected" : "" }}>XI</option>
                                            <option value="XII" {{ ( $student->kelas == "XII" ) ? "selected" : "" }}>XII</option>
                                            <option value="XIII" {{ ( $student->kelas == "XIII" ) ? "selected" : "" }}>XIII</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatLahir" value="{{ $student->tempatLahir }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggalLahir" value="{{ $student->tanggalLahir }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Jenis Kelamin</label>
                                        <div class="form-check form-check-inline ml-2">
                                            <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="pria" {{ ($student->jenisKelamin=='pria')? "checked" : "" }}>
                                            <label class="form-check-label">Pria</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="wanita" {{ ($student->jenisKelamin=='wanita')? "checked" : "" }}>
                                            <label class="form-check-label">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text" for="inputGroupSelect01">Golongan Darah</label>
                                        <select name="golDarah" class="custom-select" id="inputGroupSelect01">
                                            {{-- <option selected disabled>Pilih Golongan Darah...</option> --}}
                                            <option value="A" {{ ( $student->golDarah == "A" ) ? "selected" : "" }}>A</option>
                                            <option value="B" {{ ( $student->golDarah == "B" ) ? "selected" : "" }}>B</option>
                                            <option value="O" {{ ( $student->golDarah == "O" ) ? "selected" : "" }}>O</option>
                                            <option value="AB" {{ ( $student->golDarah == "AB" ) ? "selected" : "" }}>AB</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tahun Pelajaran</label>
                                        <input type="text" class="form-control" placeholder="Tahun Pelajaran" name="tahunPelajaran" value="{{ $student->tahunPelajaran }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">No. HP</label>
                                        <input type="text" class="form-control" placeholder="Nomor HP" name="noHP" value="{{ $student->noHP }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Email</label>
                                        <input type="text" class="form-control" placeholder="Alamat Email" name="email" value="{{ $student->email }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Alamat</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="alamat" placeholder="Alamat">{{ $student->alamat }}</textarea>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Nama Orangtua</label>
                                        <input type="text" class="form-control" placeholder="Ortu/Wali" name="namaOrtu" value="{{ $student->namaOrtu }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Alamat Orangtua</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="alamatOrtu" placeholder="Alamat Wali">{{ $student->alamatOrtu }}</textarea>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">No. HP Orangtua</label>
                                        <input type="text" class="form-control" placeholder="Nomor HP Wali" name="noHpOrtu" value="{{ $student->noHpOrtu }}">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Foto Siswa</span>
                                        </div>
                                        <div class="custom-file">
                                            <input value="{{ $student->photoSiswa }}" oninput="loadFile(event)" type="file" class="custom-file-input" name="photoSiswa" onchange="previewFile(this)">
                                            <label class="custom-file-label text-muted">jpeg/jpg/png format</label>                                       
                                        </div>
                                    </div>
                                    <img class="mb-4" id="previewImgPas" src="{{ asset('images') }}/{{ $student->photoSiswa }}" width="120px" height="80px">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Paraf Siswa</span>
                                        </div>
                                        <div class="custom-file">
                                            <input value="{{ $student->parafSiswa }}"  oninput="loadFile2(event)" type="file" class="custom-file-input" name="parafSiswa" onchange="previewFile2(this)">
                                            <label class="custom-file-label text-muted">jpeg/jpg/png format</label>
                                        </div>
                                    </div>
                                    <img class="mb-4" id="previewImgParaf" src="{{ asset('images') }}/{{ $student->parafSiswa }}" width="120px" height="80px">
                                    <div class="input-group mb-4">
                                        <input type="submit" value="Ubah" class="btn btn-success mr-2">
                                        <input type="reset" value="Batal" class="btn btn-danger ml-2">
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection