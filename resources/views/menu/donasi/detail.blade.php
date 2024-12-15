@extends('layout.master')
@section('title', 'Donasi')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($donasi->foto) }}" class="img-fluid" alt="{{ $donasi->judul }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $donasi->judul }}</h1>
            <p><strong>Kategori:</strong> {{ ucfirst($donasi->kategori) }}</p>
            <p><strong>Deskripsi:</strong> {{ $donasi->deskripsi }}</p>
            <a href="#" class="btn" style="background-color: #AF0000; color: white;">Donasi Sekarang</a>
        </div>
    </div>
</div>
@endsection