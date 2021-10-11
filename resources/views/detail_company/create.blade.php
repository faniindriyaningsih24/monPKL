@extends('layouts.master')

@section('title', 'Tambah Detail')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data</h1>
        </div>

        <div class="section-body">
            <a href="/company-detail" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

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
                    <form action="{{ route('company-detail.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Pilih Siswa</label>
                                        <select class="form-control selectric" required name="idStudent">
                                            <option disabled selected>NIS - Nama - Kelas - Jurusan</option>
                                            @foreach ( $students as $student )
                                                <option value="{{ $student->id }}">
                                                    {{ $student->nis }} - {{ $student->namaSiswa }} - {{ $student->kelas }} - {{ $student->kompetensiKeahlian }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Perusahaan</label>
                                        <select class="form-control selectric" required name="idCompany">
                                            <option disabled selected>Nama Perusahaan</option>
                                            @foreach ( $companies as $company )
                                                <option value="{{ $company->id }}">
                                                    {{ $company->namaPerusahaan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Guru</label>
                                        <select class="form-control selectric" required name="id_teacher">
                                            <option disabled selected>NUPTK - Nama</option>
                                            @foreach ( $teachers as $teacher )
                                                <option value="{{ $teacher->id }}">
                                                    {{ $teacher->nuptk }} - {{ $teacher->namaGuru }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Mentor</label>
                                        <select class="form-control selectric" required name="idMentors">
                                            <option disabled selected>Nama Mentor</option>
                                            @foreach ( $mentors as $mentor )
                                                <option value="{{ $mentor->id }}">
                                                    {{ $mentor->namaMentors }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Mulai PKL</label>
                                        <input type="date" class="form-control" placeholder="" name="tglMulaiPKL">
                                    </div>
                                    <div class="input-group mb-4">
                                        <label class="input-group-text">Tanggal Selesai PKL</label>
                                        <input type="date" class="form-control" placeholder="" name="tglSelesaiPKL">
                                    </div>
                                    <div class="form-group">
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