@extends('layouts.master')
@section('title', 'Form')

@section('konten')
<h1>Form Donasi</h1>
<form action="{{ route('donasi.form', '{$donasiId}') }}" method="POST">
    @csrf
    <input type="hidden" name="article_id" value="{{ $donasiId }}">
    <label for="amount">Jumlah Donasi:</label>
    <input type="number" name="amount" required>
    <button type="submit">Donasi</button>
</form>
@endsection