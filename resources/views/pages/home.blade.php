@extends("layouts.app")

@sectioon('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/hitam.jpeg',
        'title' => 'BMW X6 Hitam Super',
        'desc' => 'KBMW X6 hitam adalah sebuah SUV mewah yang menggabungkan desain coupe yang elegan dengan performa off-road yang tangguh. 
        Mobil ini dikenal sebagai "Sports Activity Coupé" (SAC) karena desain atapnya yang miring, menggabungkan fitur-fitur SUV (jarak bebas tanah tinggi, penggerak semua roda) dengan gaya coupe.'
    ])
@endsection