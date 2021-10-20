@extends('layouts/master')

@section('title', 'Presensi')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Presensi</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="presensi/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="10px" class="text-center">No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Paraf Mentor</th>
                    </tr>
                    @php
                    $no=1;
                    $no = ($presensi->currentpage()-1)*$presensi->perpage()+1;
                    @endphp
                    @foreach ($presensi as $s)
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $s->created_at}}</td>
                        <td>
                            @if($s->keterangan==1)
                                 <img src="{{ asset("images") }}/{{ $s->parafSiswa }}" class="py-2" alt="" width="50px" height="60px">
                            @else
                                Sakit / Izin
                            @endif
                        </td>
                        <td>
                            @if($s->setuju==1)
                                 <img src="{{ asset("images") }}/{{ $s->parafMentors }}" class="py-2" alt="" width="50px" height="60px">
                            @else
                                Menunggu Persetujuan Mentor
                            @endif
                        </td>
                    </tr>
                    @php
                    $no++; 
                    @endphp
                    @endforeach
                </table>
            </div>
        </div>
        {{$presensi->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
