@extends('layouts.master')

@section('title', 'Home')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Home monPKL</h1>
      </div>

      <div class="section-body">
        <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5><br>
      </div>
    </section>
</div>
@endsection