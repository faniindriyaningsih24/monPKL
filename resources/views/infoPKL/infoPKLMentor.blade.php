@extends('layouts/master')

@section('title', 'Informasi PKL')
{{-- @inject('DetailCompany', 'App\Models\DetailCompany') --}}

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi PKL</h1>
        </div>
    </section>

    <div class="section-body">
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}

        {{-- <a href="journal/create" class="btn btn-sm btn-info mb-3 fa fa-plus px-2"></a> --}}
        @php
         $namapt = ""
        @endphp
        @foreach ($cmpDetailMentor as $all)
            @if($namapt<>$all->namaPerusahaan)
            @php
             $namapt = $all->perusahaan['namaPerusahaan']; 
             $siswa = App\Models\DetailCompany::where([
                ['idCompany',"=",$all->idCompany],
                ['id_teacher',"=",$all->id_teacher],
                ['idMentors',"=",$all->idMentors]
            ])->get();
            @endphp
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-success">
                <div class="card-header">
                    <h4>Card Header</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                    <tr>
                                        <td>Nama Perusahaan </td><td>:</td> <td>{{ $all->perusahaan['namaPerusahaan']  }}</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Siswa </td><td>:</td> <td>
                                            <ol>
                                            @foreach($siswa as $rows)
                                               <li> {{ $rows->siswa["namaSiswa"] }} <a href="/show/{{ $rows->siswa['id'] }}">Lihat</a></li> 
                                            @endforeach
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pembimbing DUDI </td><td>:</td> <td>{{ $all->mentor['namaMentors']  }}</td>
                                    </tr>
                                    <tr>
                                        <td>No Tlp Pembimbing DUDI </td><td>:</td> <td>{{ $all->mentor['noHpMentors']  }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Guru </td><td>:</td> <td>{{ $all->guru['namaGuru']  }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Mulai PKL </td><td>:</td> <td>{{ $all->perusahaan['tglMulaiPKL']  }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Selesai PKL </td><td>:</td> <td>{{ $all->perusahaan['tglSelesaiPKL']  }}</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            @endif
        @endforeach
    
</div>
@endsection
