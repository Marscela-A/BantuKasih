@extends('layout.master')
@section('title', __('message.judul_article', ['judul' => $donasi->judul]))

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="padding-top:20px">
            <img src="{{ asset('img/'.$donasi->foto) }}" class="img-fluid" alt="{{ $donasi->judul }}" style="width:550px;height:300px">
        </div>
        <div class="col-md-6">
            <h1>@lang('message.judul_article', ['judul' => $donasi->judul])</h1>
            <p><strong>Kategori:</strong> @lang('message.kategori', ['kategori' => ucfirst($donasi->kategori)])</p>
            <p><strong>Deskripsi:</strong> @lang('message.desc_article', ['deskripsi' =>  $donasi->deskripsi])</p>
            <p>@lang('message.mini_text')</p>
            <a href="{{ route('donasi.form', $donasi->id) }}" class="btn" style="background-color: #AF0000; color: white;">@lang('message.btn_donasi')</a>>
        </div>
    </div>
</div>
@endsection