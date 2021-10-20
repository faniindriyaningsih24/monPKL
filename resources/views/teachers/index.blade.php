@extends('layouts/master')

@section('title', 'Guru')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Guru</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="teachers/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <tr>
                    <th width="10px" class="text-center">No</th>
                    <th>NUPTK</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Foto</th>
                    <th>Paraf</th>
                    <th width="50px" class="text-center">Action</th>
                </tr>
                @php 
                $no=1;
                $no = ($teachers->currentpage()-1)*$teachers->perpage()+1;
                @endphp
                @foreach ($teachers as $s)
                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td>{{ $s->nuptk }}</td>
                    <td>{{ $s->namaGuru}}</td>
                    <td>{{ $s->email}}</td>
                    <td>{{ $s->noHpGuru}}</td>
                    <td><img src="{{ asset("images") }}/{{ $s->photoGuru }}" class="py-2" alt="Foto Siswa" width="50px" height="60px"></td>
                    <td><img src="{{ asset("images") }}/{{ $s->parafGuru }}" class="py-2" alt="Paraf Siswa" width="50px" height="60px"></td>
                    <td style="width: 13%">
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary btn-sm fas fa-edit mr-1" href="teacher-edit/{{ $s->id }}"></a>
                
                            <a onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')" href="delete-teacher/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt ml-1" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a>
                        </div>
                    </td>
                </tr>
                @php
                   $no++; 
                @endphp
                @endforeach
            </table>
            {{$teachers->links("pagination::bootstrap-4")}}
        </div>
        </div>
    </div>
</div>
@endsection
