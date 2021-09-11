@extends('layouts/master')

@section('title', 'Siswa')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Siswa</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="students/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <table class="table table-bordered">
            <tr>
                <th width="10px" class="text-center">No</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Foto Siswa</th>
                <th>Paraf</th>
                <th width="120px" class="text-center">Action</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($students as $s)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $s->namaSiswa}}</td>
                <td>{{ $s->kompetensiKeahlian}}</td>
                <td>{{ $s->kelas}}</td>
                <td><img src="{{ asset("images") }}/{{ $s->photoSiswa }}" class="py-2" alt="Foto Siswa" width="150px" height="130px"></td>
                <td><img src="{{ asset("images") }}/{{ $s->parafSiswa }}" class="py-2" alt="Paraf Siswa" width="150px" height="130px"></td>
                <td style="width: 13%">
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-info btn-sm fas fa-info" href="show-student/{{ $s->id }}"></a>
        
                        <a class="btn btn-primary btn-sm fas fa-edit" href="students-edit/{{ $s->id }}"></a>
            
                        <a href="delete-student/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{$students->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
