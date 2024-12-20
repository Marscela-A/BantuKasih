@extends('layout.master')
@section('title','Hasil Penelusuran')
@section('konten')
<div class="col-12">
    <div class="container mt-4">
        <h3>Hasil Pencarian untuk: "{{ $searchTerm }}"</h3>
        @if($articles->isEmpty())
            <p>Tidak ada hasil yang ditemukan.</p>
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
                                <h5 class="card-title">{{ $article->judul }}</h5>
                                <p class="card-text">{{ Str::limit($article->deskripsi, 150) }}</p>
                                <a href="{{ route('donasi.show', $article->id) }}" class="btn" style="background-color: #AF0000; color: white;">Detail</a>
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