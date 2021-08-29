@extends('layouts.master')

@section('title', 'Tambah Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Perusahaan</h1>
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
                <div class="col-8">
                    <form action="{{ route('companies.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama Perusahaan</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Kontak</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email/Telepon" name="kontak">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Pimpinan</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Pimpinan" name="pimpinan">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Alamat</span>
                            </div>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" value="Tambah" class="btn btn-success mr-2">
                            <input type="reset" value="Batal" class="btn btn-danger ml-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection