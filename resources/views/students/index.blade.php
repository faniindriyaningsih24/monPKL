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

        <a href="students/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2 mr-2"></a>
        <a href="/students/importView" class="btn btn-sm btn-success mb-3 px-2 ml-2"><i class="fas fa-file-import"></i></a>
        <div class="col-md-12">
            <div class="table-responsive">
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
                    @php 
                    $no=1;
                    $no = ($students->currentpage()-1)*$students->perpage()+1;
                    @endphp
                    @foreach ($students as $s)
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $s->namaSiswa}}</td>
                        <td>{{ $s->kompetensiKeahlian}}</td>
                        <td>{{ $s->kelas}}</td>
                        <td><img src="{{ asset("images") }}/{{ $s->photoSiswa }}" class="py-2" alt="Foto Siswa" width="50px" height="60px"></td>
                        <td><img src="{{ asset("images") }}/{{ $s->parafSiswa }}" class="py-2" alt="Paraf Siswa" width="50px" height="60px"></td>
                        <td style="width: 13%">
                            <div class="d-flex justify-content-around">
                                <a class="btn btn-info btn-sm fas fa-info" href="show-student/{{ $s->id }}"></a>
                
                                <a class="btn btn-primary btn-sm fas fa-edit" href="students-edit/{{ $s->id }}"></a>
                    
                                <a href="delete-student/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')"></a>
                            </div>
                        </td>
                    </tr>
                    @php
                    $no++; 
                    @endphp
                    @endforeach
                </table>
            </div>
        </div>
        {{$students->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
