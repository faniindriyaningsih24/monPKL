@extends('layouts/master')

@section('title', 'Detail Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Perusahaan</h1>
        </div>
    </section>

    <div class="section-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('failed'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="company-detail/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="10px" class="text-center">No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Tempat PKL</th>
                        <th>Pembimbing PKL</th>
                        <th>Guru Pembimbing</th>
                        <th width="120px" class="text-center">Action</th>
                    </tr>
                    @php 
                        $no=1;
                        $no = ($detailCompany->currentpage()-1)*$detailCompany->perpage()+1;
                    @endphp
                    @foreach ($detailCompany as $dc)
        
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $dc->siswa['nis'] }}</td>
                        <td>{{ $dc->siswa['namaSiswa'] }}</td>
                        <td>{{ $dc->perusahaan['namaPerusahaan'] }}</td>
                        <td>{{ $dc->mentor['namaMentors'] }}</td>
                        <td>{{ $dc->guru['namaGuru'] }}</td>
                        <td class="text-center">
                            <form action="{{ route('company-detail.destroy', $dc->id) }}" method="POST">
        
                                <a class="btn btn-primary btn-sm fas fa-edit mr-1" href="{{ route('company-detail.edit', $dc->id) }}"></a>
        
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm fas fa-trash-alt ml-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></button>
                            </form>
                        </td>
                    </tr>
                    @php
                    $no++; 
                    @endphp
                    @endforeach
                </table>
            </div>
        </div>
        {{$detailCompany->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
