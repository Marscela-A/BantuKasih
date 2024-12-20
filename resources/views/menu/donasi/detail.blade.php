@extends('layout.master')
@section('title', 'Donasi')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="padding-top:20px">
            <img src="{{ asset('img/'.$donasi->foto) }}" class="img-fluid" alt="{{ $donasi->judul }}" style="width:550px;height:300px">
        </div>
        <div class="col-md-6">
            <h1>{{ $donasi->judul }}</h1>
            <p><strong>Kategori:</strong> {{ ucfirst($donasi->kategori) }}</p>
            <p><strong>Deskripsi:</strong> {{ $donasi->deskripsi }}</p>
            <p>Untuk membantu teman-teman kita yang sedang kesulitan ini, mari kita berdonasi</p>
            <a href="#" class="btn" style="background-color: #AF0000; color: white;">Donasi Sekarang</a>
        </div>
    </div>
</div>
@endsection