@extends('layouts/master')

@section('title', 'Edit Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Perusahaan</h1>
        </div>

        <div class="section-body">
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
                    <form action="{{ route('companies.update',$company->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama Perusahaan</span>
                            </div>
                            <input type="text" value="{{ $company->nama }}" class="form-control" name="nama">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Kontak</span>
                            </div>
                            <input type="text" value="{{ $company->kontak }}" class="form-control" name="kontak">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Pimpinan</span>
                            </div>
                            <input type="text" value="{{ $company->pimpinan }}" class="form-control" name="pimpinan">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Alamat</span>
                            </div>
                            <textarea name="alamat" class="form-control">{{ $company->alamat }}</textarea>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
