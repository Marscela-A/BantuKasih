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
            <div style="padding-top:20px">
                <h1>Donor</h1>
                <p>Saat sakit kita membutuhkan bantuan, baik dari keluarga, teman, maupun lingkungan sekitar. Terutama pada penyakit yang sulit disembuhkan maupun membutuhkan pertolongan langsung dari orang lain. Oleh karena itu, disediakan fitur donor ini yang akan membantu masyarakat yang membutuhkan bantuan donor agar dapat sembuh dan beraktivitas seperti manusia sehat lainnya. Fitur donor yang disediakan adalah fitur donor darah dan donor organ</p>
                <div class="card-group">
                    <div class="card">
                        <img src="{{asset('img/donor.jpg')}}" class="card-img-top" alt="Donor Darah" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">Donor Darah</h5>
                        <p class="card-text">Donor darah adalah fitur yang berisi daftar rumah sakit yang membutuhkan donor darah dengan data golongan darah yang dibutuhkan, sehingga memudahkan kita dalam aksi menolong pasien yang kekurangan darah</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donor.kategori', 'darah') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/organ.jpg')}}" class="card-img-top" alt="Donor Organ" style="width: auto; height: 250px;">
                        <div class="card-body">
                        <h5 class="card-title">Donor Organ</h5>
                        <p class="card-text">Donor organ adalah fitur yang berisi daftar rumah sakit yang membutuhkan donor organ untuk pasien yang operasi dengan data organ yang diperlukan, sehingga memudahkan dalam mendonorkan organ secara resmi dan bermanfaat pada orang lain</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('donor.kategori', 'organ') }}" class="btn btn-danger" style="background-color: #AF0000;">Baca Lebih Lanjut</a>
                        </div>
                    </div>
                <div>
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