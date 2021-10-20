@extends('layouts.master')

@section('title', 'Edit Guru')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Guru</h1>
        </div>

        <div class="section-body">
            <a href="/teachers" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

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
                    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>NUPTK</label>
                                        <input type="text" class="form-control" value="{{ $teacher->nuptk }}" name="nuptk">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{ $teacher->namaGuru }}" name="namaGuru">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" value="{{ $teacher->email }}" name="email">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>No HP</label>
                                        <input type="text" class="form-control" value="{{ $teacher->noHpGuru }}" name="noHpGuru">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Foto Guru</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="loadFile(event)" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="photoGuru">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                <img id="previewImgPas" width="150px" height="150px" class="mb-4" src="{{ asset('images') }}/{{ $teacher->photoGuru }}">
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Paraf Guru</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="loadFile2(event)" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="parafGuru">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <p><b> Silahkan rekam tanda tangan anda di </b><a href="https://createmysignature.com/">https://createmysignature.com/</a></p>
                                    <img id="previewImgParaf" width="150px" height="150px" class="mb-4" src="{{ asset('images') }}/{{ $teacher->parafGuru }}">

                                    <div class="input-group mb-4 mt-2">
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