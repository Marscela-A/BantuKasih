@extends('layout.master')
@section('title', __('message.search'))
@section('konten')
<div class="col-12">
    <div class="container mt-4">
        <h3>@lang('message.hasil_search') "{{ $searchTerm }}"</h3>
        @if($articles->isEmpty())
            <p>@lang('message.no_search')</p>
        @else
            <ul>
                @foreach($articles as $article)
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/'.$article->foto) }}" class="img-fluid rounded-start" alt="{{ $article->judul }}" style="height:250px;width:500px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">@lang('message.judul_article', ['judul' => $article->judul])</h5>
                                <p class="card-text">@lang('message.desc_article', ['deskripsi' => Str::limit($article->deskripsi, 150)])</p>
                                <a href="{{ route('donasi.show', $article->id) }}" class="btn" style="background-color: #AF0000; color: white;">@lang('message.btn_detail')</a>
                                </div>
                            </div>
                        </div>
                        </div>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection