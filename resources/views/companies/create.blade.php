@extends('layouts.master')

@section('title', 'Tambah Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Company</h1>
        </div>

        <div class="section-body">
            <a href="{{ route('companies.index') }}" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

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
                    <form action="{{ route('companies.store') }}" method="POST">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" class="form-control" placeholder="Nama Perusahaan" name="namaPerusahaan">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Usaha</label>
                                        <input type="text" class="form-control" placeholder="Jenis Usaha" name="jenisUsaha">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pimpinan</label>
                                        <input type="text" class="form-control" placeholder="Nama Pimpinan" name="namaPimpinan">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama HRD</label>
                                        <input type="text" class="form-control" placeholder="Nama HRD" name="namaHrd">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea type="text" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>No Hp / Tlp</label>
                                        <input type="text" class="form-control" placeholder="No Hp / Tlp" name="noHpPerusahaan">
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