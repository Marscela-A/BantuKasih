@extends('layout.master')
@section('title', 'Halaman Utama')

@section('konten')
<div>
    <div class="col-12">
        <img src="{{asset('img/banner.jpg')}}" alt="Banner" style= "width:100%;height:80vh;padding-bottom:20px">
        <div class="container mt-4">
            <div>
                <h1>Donasi</h1>
                <p>Di sekitar kita, ada banyak orang yang membutuhkan bantuan agar dapat hidup layak seperti masyarakat biasa. Oleh karena itu, disediakan fitur Donasi agar dapat membantu sesama saudara kita yang kesulitan agar dapat hidup lebih baik dan layak. Beberapa kategori dari fitur Donasi diantaranya adalah penyandang disabilitas, korban bencana alam, dan panti asuhan</p>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/disabilitas.jpg')}}" class="card-img-top" alt="Disabilitas" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">Disabilitas</h5>
                        <p class="card-text">Disabilitas adalah fitur yang berisi daftar penyandang disabilitas yang memudahkan kita dalam berdonasi kepada penyandang disabilitas disekitar kita</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'disabilitas') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/donasi.jpg')}}" class="card-img-top" alt="Bencana Alam" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">Bencana Alam</h5>
                        <p class="card-text">Bencana alam adalah fitur yang berisi daftar bencana alam yang terjadi di sekitar kita dan layanan donasi kepada korbannya</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'bencana alam') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/panti asuhan.jpg')}}" class="card-img-top" alt="Panti Asuhan" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">Panti Asuhan</h5>
                        <p class="card-text">Panti Asuhan adalah fitur yang berisi daftar panti asuhan di sekitar kita dengan tujuan memberikan kehidupan yang lebih layak kepada anak-anak yatim piatu</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donasi.kategori', 'panti asuhan') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container mt-4" style="padding-bottom:40px;">
            <div style="text-align:center">
                <h1>Tentang Kami</h1>
                <img src="img/banner.jpg" alt="banner" style="width:70%; height:300px">
                <p>Bantu Kasih adalah sebuah platfowm website yang bertujuan untuk meningkatkan kualitas masyarakat terutama di Indonesia dengan membantu sesama masyarakat yang sedang...</p>
                <a href="{{ route('aboutus') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
            </div>
        </div>
    </div>
</div>
@endsection