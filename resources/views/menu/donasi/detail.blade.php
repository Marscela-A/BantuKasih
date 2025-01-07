@extends('layout.master')
@section('title', __('crud.judul_article', ['judul' => $donasi->judul]))

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="padding-top:20px">
            <img src="{{ asset('img/'.$donasi->foto) }}" class="img-fluid" alt="{{ $donasi->judul }}" style="width:550px;height:300px">
        </div>
        <div class="col-md-6">
            <h1>@lang('crud.judul_article', ['judul' => $donasi->judul])</h1>
            <p><strong>Kategori:</strong> @lang('crud.kategori', ['kategori' => ucfirst($donasi->kategori)])</p>
            <p><strong>Deskripsi:</strong> @lang('crud.desc_article', ['deskripsi' =>  $donasi->deskripsi])</p>
            <p>@lang('crud.mini_text')</p>
            <a href="{{ route('donasi_form', $donasi->id) }}" class="btn" style="background-color: #AF0000; color: white;">@lang('crud.btn_donasi')</a>
        </div>
    </div>
</div>
@endsection