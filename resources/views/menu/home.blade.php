@extends('layout.master')
@section('title', __('message.home'))

@section('konten')
<div>
    <div class="col-12">
        <img src="{{asset('img/banner.jpg')}}" alt="Banner" style= "width:100%;height:80vh;padding-bottom:20px">
        <h1 style="text-align:center">@lang('message.slogan')</h1>
        @if (session('success'))
            <div class="alert alert-danger" role="alert">
                {{ session('success') }}
            </div>
            {{ __('Dashboard') }}
        @endif
        <h3 style="text-align:center">@lang('message.mini_slogan')</h3>
        <div class="container mt-4">
            <div>
                <p>@lang('message.desc_donasi')</p>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/disabilitas.jpg')}}" class="card-img-top" alt="Disabilitas" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">@lang('message.judul_disabilitas')</h5>
                        <p class="card-text">@lang('message.desc_disabilitas')</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'disabilitas') }}" class="btn btn-danger" style="background-color: #AF0000;">@lang('message.btn_detail')</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/donasi.jpg')}}" class="card-img-top" alt="Bencana Alam" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">@lang('message.judul_bencanaalam')</h5>
                        <p class="card-text">@lang('message.desc_bencanaalam')</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'bencana alam') }}" class="btn btn-danger" style="background-color: #AF0000;">@lang('message.btn_detail')</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/panti asuhan.jpg')}}" class="card-img-top" alt="Panti Asuhan" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">@lang('message.judul_pantiasuhan')</h5>
                        <p class="card-text">@lang('message.desc_pantiasuhan')</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'panti asuhan') }}" class="btn btn-danger" style="background-color: #AF0000;">@lang('message.btn_detail')</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container mt-4" style="padding-bottom:40px;">
            <div style="text-align:center">
                <h1>@lang('message.judul_tentangkami')</h1>
                <img src="img/banner.jpg" alt="banner" style="width:70%; height:300px">
                <?php $tentangkami = __('message.desc_tentangkami1'); ?>
                <p>{{ Str::limit($tentangkami, 150) }}</p>
                <a href="{{ route('aboutus') }}" class="btn btn-danger" style="background-color: #AF0000;">@lang('message.btn_detail')</a>
            </div>
        </div>
    </div>
</div>
@endsection