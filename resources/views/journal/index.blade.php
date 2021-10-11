@extends('layouts/master')

@section('title', 'Journal')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Journal</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="journal/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <table class="table table-bordered">
            <tr>
                <th width="10px" class="text-center">No</th>
                {{-- <th>Nama Siswa</th> --}}
                <th>Tanggal</th>
                <th>Bidang Pekerjaan</th>
                <th>Uraian Pekerjaan</th>
                <th>Paraf Mentor</th>
                <th width="120px" class="text-center">Action</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($journal as $s)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                {{-- <td>{{ $s->namaSiswa}}</td> --}}
                <td>{{ $s->tanggalJurnal}}</td>
                <td>{{ $s->bidangPekerjaan}}</td>
                <td>{{ $s->uraianPekerjaan}}</td>
                <td>
                    @if($s->setuju==1)
                         <img src="{{ asset("images") }}/{{ $s->parafMentors }}" class="py-2" alt="Paraf Siswa" width="50px" height="60px">
                    @else
                        Menunggu Persetujuan Mentor
                    @endif
                </td>
                <td style="width: 13%">
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-primary btn-sm fas fa-edit mr-1" href="journal-edit/{{ $s->id }}"></a>
            
                        {{-- <a onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')" href="delete-journal/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt ml-1" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a> --}}
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{$journal->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
