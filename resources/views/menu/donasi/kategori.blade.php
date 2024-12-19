@extends('layout.master')
@section('title', 'Donasi')

@section('konten')
<div class="container">
    <h4 class="my-4">Donasi {{ ucfirst($kategori) }}</h4>
    <div class="row">
        @foreach ($donasi as $item)
        <div class="col-md-12 mb-3">
            <div class="card mb-3" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/'.$item->foto) }}" class="img-fluid rounded-start" alt="{{ $item->judul }}" style="height:250px;width:500px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ Str::limit($item->deskripsi, 150) }}</p>
                            <a href="{{ route('donasi.show', $item->id) }}" class="btn" style="background-color: #AF0000; color: white;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <style>
        .pagination {
            justify-content: center;
        }
        .pagination .page-link {
            color: #AF0000;
        }
        .pagination .page-link:hover {
            color: white;
            background-color: #AF0000;
        }
        .pagination .page-item.active .page-link {
            color: white;
            background-color: #AF0000;
            border-color: #AF0000;
        }
    </style>


    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination pagination-sm">
                {{ $donasi->links('pagination::bootstrap-5') }}
            </ul>
        </nav>
    </div>

</div>
@endsection
