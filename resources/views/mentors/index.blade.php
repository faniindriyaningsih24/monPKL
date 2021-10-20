@extends('layouts/master')

@section('title', 'Mentor')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Mentor</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="mentors/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%">
                    <tr>
                        <th width="10px" class="text-center">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Foto</th>
                        <th>Paraf</th>
                        <th width="120px" class="text-center">Action</th>
                    </tr>
                    @php 
                    $no=1;
                    $no = ($mentors->currentpage()-1)*$mentors->perpage()+1;
                    @endphp
                    @foreach ($mentors as $s)
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $s->namaMentors}}</td>
                        <td>{{ $s->email}}</td>
                        <td>{{ $s->noHpMentors}}</td>
                        <td><img src="{{ asset("images") }}/{{ $s->photoMentors }}" class="py-2" alt="Foto Siswa" width="50px" height="60px"></td>
                        <td><img src="{{ asset("images") }}/{{ $s->parafMentors }}" class="py-2" alt="Paraf Siswa" width="50px" height="60px"></td>
                        <td style="width: 13%">
                            <div class="d-flex justify-content-around">
                                <a class="btn btn-primary btn-sm fas fa-edit mr-1" href="mentor-edit/{{ $s->id }}"></a>
                    
                                <a onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')" href="delete-mentor/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt ml-1" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a>
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
        {{$mentors->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
