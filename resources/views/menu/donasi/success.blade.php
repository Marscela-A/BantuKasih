@extends('layout.master')

@section('title', 'Checkout Berhasil')

@section('konten')
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-success">Pembayaran Berhasil</h1>
                <p class="text-success">Terima kasih telah melakukan pembayaran</p>
                <a href="{{ route('home') }}" class="btn btn-danger mt-3" style="background-color: #AF0000; color: white;">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
@endsection