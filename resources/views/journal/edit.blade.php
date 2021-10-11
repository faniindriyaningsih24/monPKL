@extends('layouts.master')

@section('title', 'Edit Journal')

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
                    <form action="{{ route('journal.update', $journal->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="text" class="form-control" name="idCompanyDetail" value="{{ $journal->namaSiswa }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control" name="tanggalJurnal" value="{{ date('d-m-Y') }}" disabled>
                                    </div>
                                    @if ($level=="mentor")
                                        <div class="form-group">
                                            <label>Bidang Pekerjaan</label>
                                            <input type="text" class="form-control" name="bidangPekerjaan" value="{{ $journal->bidangPekerjaan}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Uraian Pekerjaan</label>
                                            <textarea class="form-control" aria-label="With textarea" name="uraianPekerjaan" disabled>{{ $journal->uraianPekerjaan}}</textarea>
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label>Bidang Pekerjaan</label>
                                            <input type="text" class="form-control" name="bidangPekerjaan" value="{{ $journal->bidangPekerjaan}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Uraian Pekerjaan</label>
                                            <textarea class="form-control" aria-label="With textarea" name="uraianPekerjaan">{{ $journal->uraianPekerjaan}}</textarea>
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
                                    @if($journal->setuju==1)
                                    <img id="previewImgParaf" width="150px" height="150px" class="mb-4" src="{{ asset('images') }}/{{ $journal->parafMentors }}">
                                    @endif
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