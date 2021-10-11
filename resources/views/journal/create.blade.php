@extends('layouts.master')

@section('title', 'Tambah Journal')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jurnal</h1>
        </div>

        <div class="section-body">
            <a href="/journal" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

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
                    <form action="{{ route('journal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="text" class="form-control" name="idCompanyDetail" value="{{ $idcmp->namaSiswa }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control" name="tanggalJurnal" value="{{ date('d-m-Y') }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidang Pekerjaan</label>
                                        <input type="text" class="form-control" name="bidangPekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian Pekerjaan</label>
                                        <textarea class="form-control" aria-label="With textarea" name="uraianPekerjaan"></textarea>
                                    </div>
                                    {{-- <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Paraf Mentor</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="loadFile2(event)" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="parafMentors">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <img id="previewImgParaf" width="150px" height="150px" class="mb-4"> --}}
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