@extends('layouts.master')

@section('title', 'Tambah Siswa')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Siswa</h1>
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
                    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">NIS</label>
                                        <input type="text" class="form-control" placeholder="Nomor Induk Siswa" name="nis">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" name="namaSiswa">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text" for="inputGroupSelect01">Kompetensi Keahlian</label>
                                        <select name="kompetensiKeahlian" class="custom-select" id="inputGroupSelect02">
                                            <option selected disabled>Jurusan...</option>
                                            <option value="MM">MM</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="SIJA">SIJA</option>
                                            <option value="RPL">RPL</option>
                                            <option value="TOI">TOI</option>
                                            <option value="TP">TP</option>
                                            <option value="BKP">BKP</option>
                                            <option value="DPIB">DPIB</option>
                                            <option value="TFLM">TFLM</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Kelas...</label>
                                        <select name="kelas" class="custom-select" id="inputGroupSelect01">
                                            <option selected disabled>Kelas</option>
                                            <option value="XII">XII - 1</option>
                                            <option value="XII">XII - 2</option>
                                            <option value="XII">XII - 3</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatLahir">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggalLahir">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Jenis Kelamin</label>
                                        <div class="form-check form-check-inline ml-2">
                                            <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="pria">
                                            <label class="form-check-label">Pria</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="wanita">
                                            <label class="form-check-label">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text" for="inputGroupSelect01">Golongan Darah</label>
                                        <select name="golDarah" class="custom-select" id="inputGroupSelect01">
                                            <option selected disabled>Pilih Golongan Darah...</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tahun Pelajaran</label>
                                        <input type="text" class="form-control" placeholder="Tahun Pelajaran" name="tahunPelajaran">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">No. HP</label>
                                        <input type="text" class="form-control" placeholder="Nomor HP" name="noHP">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Email</label>
                                        <input type="text" class="form-control" placeholder="Alamat Email" name="email">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Alamat</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="alamat" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Nama Orangtua</label>
                                        <input type="text" class="form-control" placeholder="Ortu/Wali" name="namaOrtu">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Alamat Orangtua</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea" name="alamatOrtu" placeholder="Alamat Wali"></textarea>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">No. HP Orangtua</label>
                                        <input type="text" class="form-control" placeholder="Nomor HP Wali" name="noHpOrtu">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Foto Siswa</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="loadFile(event)" type="file" class="custom-file-input" name="photoSiswa">
                                            <label class="custom-file-label text-muted">jpeg/jpg/png format</label>                                       
                                        </div>
                                    </div>
                                    <img id="previewImgPas" width="150px" height="150px" class="mb-4">
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Paraf Siswa</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="loadFile2(event)" type="file" class="custom-file-input" name="parafSiswa">
                                            <label class="custom-file-label text-muted">jpeg/jpg/png format</label>
                                        </div>
                                    </div>
                                    <img id="previewImgParaf" width="150px" height="150px" class="mb-4">
                                    <div class="input-group mb-4">
                                        <input type="submit" value="Tambah" class="btn btn-success mr-2">
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