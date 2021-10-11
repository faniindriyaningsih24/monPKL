@extends('layouts.master')

@section('title', 'Acc Presensi')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Acc Presensi</h1>
        </div>

        <div class="section-body">
            <a href="/presensi" class="btn btn-sm p-2 btn-warning mb-3"><i class="fas fa-chevron-circle-left"></i></a>

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
                    <form action="{{ route('presensi.update', $presensi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="text" class="form-control" name="idCompanyDetail" value="{{ $presensi->namaSiswa }}" disabled>
                                    </div>

                                    @if($presensi->keterangan==1)
                                    <img id="previewImgParaf" width="150px" height="150px" class="mb-4" src="{{ asset('images') }}/{{ $presensi->parafSiswa }}">                                      
                                    @elseif($presensi->keterangan==0)
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="" value="" placeholder="Sakit / Izin" disabled>
                                    </div>
                                    @endif

                                    @if($level=="mentor")
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="setuju" class="form-control">
                                                <option disabled selected>Silahkan Pilih</option>
                                                <option value=1>Setuju</option>
                                                <option value=0>Tidak Setuju</option>
                                        </select>
                                    </div>
                                    @endif
                                    
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
                                        <input type="submit" value="Edit" class="btn btn-success mr-2">
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