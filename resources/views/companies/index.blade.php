@extends('layouts/master')

@section('title', 'Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Perusahaan</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="companies/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <table class="table table-bordered">
            <tr>
                <th width="20px" class="text-center">No</th>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Pimpinan</th>
                <th>Alamat</th>
                <th width="280px"class="text-center">Action</th>
            </tr>
            @foreach ($companies as $c)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $c->nama}}</td>
                <td>{{ $c->kontak}}</td>
                <td>{{ $c->pimpinan}}</td>
                <td>{{ $c->alamat}}</td>
                <td class="text-center">
                    <form action="{{ route('companies.destroy', $c->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('companies.show', $c->id) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('companies.edit', $c->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
