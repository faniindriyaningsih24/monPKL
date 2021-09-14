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
        <table class="table table-bordered">
            <tr>
                <th width="10px" class="text-center">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Paraf</th>
                <th width="120px" class="text-center">Action</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($mentors as $s)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $s->namaMentors}}</td>
                <td>{{ $s->email}}</td>
                <td>{{ $s->noHpMentors}}</td>
                <td><img src="{{ asset("images") }}/{{ $s->photoMentors }}" class="py-2" alt="Foto Siswa" width="150px" height="130px"></td>
                <td><img src="{{ asset("images") }}/{{ $s->parafMentors }}" class="py-2" alt="Paraf Siswa" width="150px" height="130px"></td>
                <td style="width: 13%">
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-primary btn-sm fas fa-edit" href="mentor-edit/{{ $s->id }}"></a>
            
                        <a onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')" href="delete-mentor/{{ $s->id }}" class="btn btn-danger btn-sm fas fa-trash-alt" onclick="confirm('Apakah Anda Ingin Menghapus Data Ini')"></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{$mentors->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
