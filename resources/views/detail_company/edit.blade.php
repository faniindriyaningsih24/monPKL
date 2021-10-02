@extends('layouts.master')

@section('title', 'Edit Detail')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data</h1>
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
                    <form action="{{ route('company-detail.update', $dc->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Pilih Siswa</label>
                                        <select class="form-control selectric" required name="idStudent">
                                            @foreach ( $students as $student )
                                                <option value="{{ $student->id }}" {{ ($student->id == $dc->siswa['id']) ? "selected" : "" }}>
                                                    {{ $student->nis }} - {{ $student->namaSiswa }} - {{ $student->kelas }} - {{ $student->kompetensiKeahlian }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Perusahaan</label>
                                        <select class="form-control selectric" required name="idCompany">
                                            @foreach ( $companies as $company )
                                                <option value="{{ $company->id }}" {{ ($company->id == $dc->perusahaan['id']) ? "selected" : "" }}>
                                                    {{ $company->namaPerusahaan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Guru</label>
                                        <select class="form-control selectric" required name="id_teacher">
                                            @foreach ( $teachers as $teacher )
                                                <option value="{{ $teacher->id }}" {{ ($teacher->id == $dc->guru['id']) ? "selected" : "" }}>
                                                    {{ $teacher->nuptk }} - {{ $teacher->namaGuru }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilih Mentor</label>
                                        <select class="form-control selectric" required name="idMentors">
                                            @foreach ( $mentors as $mentor )
                                                <option value="{{ $mentor->id }}" {{ ($mentor->id == $dc->mentor['id']) ? "selected" : "" }}>
                                                    {{ $mentor->namaMentors }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
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