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
        <table class="table table-bordered">
            <tr>
                <th width="10px" class="text-center">No</th>
                {{-- <th>Nama Siswa</th> --}}
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Paraf Mentor</th>
                {{-- <th width="120px" class="text-center">Action</th> --}}
            </tr>
            <?php $i=1; ?>
            @foreach ($presensi as $s)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                {{-- <td>{{ $s->namaSiswa}}</td> --}}
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
                {{-- <td style="width: 13%"> --}}
                    {{-- <div class="d-flex justify-content-around"> --}}
                        {{-- <a class="btn btn-primary btn-sm fas fa-edit mr-1" href=""></a> --}}
            
                        {{-- <a onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')" href="delete-journal/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt ml-1" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a> --}}
                    {{-- </div> --}}
                {{-- </td> --}}
            </tr>
            @endforeach
        </table>
        {{$presensi->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
