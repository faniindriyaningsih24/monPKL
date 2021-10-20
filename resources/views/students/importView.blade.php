@extends('layouts.master')

@section('title', 'Import Data Siswa')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Import Data Siswa</h1>
        </div>

        <div class="section-body">
            {{-- <a href="" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a> --}}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your import.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                {{-- <div class="card-body"> --}}
                                    {{-- <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Import Data Siswa</span>
                                        </div>
                                        <div class="custom-file">
                                            <input value=""  oninput="loadFile2(event)" type="file" class="custom-file-input" name="importStudents" onchange="previewFile2(this)">
                                            <label class="custom-file-label text-muted">xls format</label>
                                        </div>
                                    </div> --}}
                                    {{-- <img class="mb-4" id="previewImportSiswa" src="" width="120px" height="80px"> --}}
                                    {{-- <div class="input-group mb-4">
                                        <input type="submit" value="Import" class="btn btn-success mr-2">
                                        <input type="reset" value="Batal" class="btn btn-danger ml-2">
                                    </div> --}}
                                {{-- </div> --}}
                                <div class="card-body">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control">
                                        <br>
                                        <button class="btn btn-success">Import Data Students</button>
                                        {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
                                    </form>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection