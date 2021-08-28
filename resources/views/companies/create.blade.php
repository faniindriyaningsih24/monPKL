@extends('layouts.master')

@section('title', 'Tambah Perusahaan')

@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Perusahaan</h1>
        </div>

        <div class="section-body">
            <a href="{{ route('companies.index') }}" class="btn btn-sm p-2 btn-danger mb-3"><i class="fas fa-chevron-circle-left"></i></a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('companies.store') }}" method="POST">
                @csrf
                
            </form>
        </div>
    </section>
</div>
@endsection