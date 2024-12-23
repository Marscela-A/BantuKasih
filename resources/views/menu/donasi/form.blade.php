@extends('layout.master')
@section('title', 'Form')

@section('konten')
    <h2 class="title">Formulir Pendaftaran Donasi</h2>
    <form action="{{ route('donasi_form', $donasiId) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama (Bpk/Ibu/Anonymous):</label>
            <input type="text" id="nama" name="nama" required>
            @error('nama') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="no_telp">Nomor telepon:</label>
            <input type="text" id="no_telp" name="no_telp" required>
            @error('no_telp') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            @error('alamat') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="nominal">Nominal donasi:</label>
            <input type="number" id="nominal" name="nominal" required>
            @error('nominal') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="ktp">Nomor KTP (optional):</label>
            <input type="text" id="ktp" name="ktp">
            @error('ktp') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <input type="text" id="metode_pembayaran" name="metode_pembayaran" required>
            @error('metode_pembayaran') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto diri (optional):</label>
            <input type="file" id="foto" name="foto">
            @error('foto') <div class="error">{{ $message }}</div> @enderror
        </div> 
        <a href="{{route('donasi_payment', $donasiId)}}" class="btn" style="background-color: #AF0000; color: white;">Pembayaran</a>
    </form>
    <div class="footer-space"></div>

    <style>
    body {
        font-family: Georgia, sans-serif;
        margin: 20px; 
    } 
    .title {
        text-align: center;
        font-weight: bold;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], input[type="number"], input[type="file"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .error {
        color: red;
        font-size: 12px;
    } 
    .button-container {
        text-align: right; 
    }
    button {
        padding: 10px 20px;
        background-color: #a80000;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #8b0000;
    } 
    .footer-space {
        margin-bottom: 30px;
    }
    </style>
@endsection 