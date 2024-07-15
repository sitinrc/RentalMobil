@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-5 bg-secondary text-white py-5">
    <h2 class="display-6">Selamat Datang di Jaya Rental Mobil</h2>
    <p class="lead">Pilihan Terbaik untuk Kebutuhan Transportasi Anda</p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img src="{{ url('image/welcome-image.jpg') }}" class="img-fluid custom-img mb-4 rounded shadow" alt="welcome image">
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ url('image/welcome-image2.jpg') }}" class="img-fluid custom-img mb-4 rounded shadow" alt="welcome image">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-4 shadow" style="background-color: #8a8c8f;">
                <div class="card-body">
                    <center>
                        <h3 class="text-white">Jelajahi Koleksi Mobil Kami</h3>
                        <p  class="text-white">Temukan kendaraan yang sempurna untuk perjalanan Anda dengan Jaya Rental Mobil. Kami menawarkan berbagai pilihan mobil berkualitas dengan harga terbaik di kota ini. Mulai dari mobil keluarga yang nyaman hingga kendaraan mewah untuk perjalanan bisnis, kami memiliki semua yang Anda butuhkan.</p>
                    </center>
                    <div class="row">
                        @foreach (['fortuner', 'avanza', 'pajero', 'rush', 'suzuki', 'raize', 'hilux', 'yaris', 'xenia', 'vitara', 'alphard', 'ertiga'] as $car)
                            <div class="col-md-4">
                                <div class="card mb-4" style="background-color: #e9ecef;">
                                    <img class="card-img-top" src="{{ asset('image/image-' . $car . '.jpg') }}" alt="{{ $car }}">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ ucfirst($car) }}</b></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h3 class="text-white">Mengapa Memilih Jaya Rental Mobil?</h3>
                    <div class="card mb-4" style="background-color: #9da2a7;">
                    <p><ul class="list-group list-group-flush" >
                        <li class="list-group-item bg-light"><strong>Koleksi Mobil Terlengkap:</strong> Temukan berbagai pilihan mobil dari berbagai merek terkenal.</li>
                        <li class="list-group-item bg-light"><strong>Kenyamanan dan Keamanan:</strong> Kami mengutamakan kenyamanan dan keamanan pelanggan kami.</li>
                        <li class="list-group-item bg-light"><strong>Harga Terbaik:</strong> Dapatkan harga sewa mobil yang kompetitif dengan layanan yang luar biasa.</li>
                        <li class="list-group-item bg-light"><strong>Pesan dengan Mudah:</strong> Proses pemesanan yang cepat dan mudah melalui platform online kami.</li>
                    </ul></p>
                    </div>
                    <h3 class="text-white">Layanan Kami</h3>
                    <div class="card mb-4" style="background-color: #9da2a7;">
                    <p><ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light"><strong>Sewa Harian, Mingguan, atau Bulanan:</strong> Fleksibilitas untuk memenuhi kebutuhan perjalanan Anda.</li>
                        <li class="list-group-item bg-light"><strong>Layanan Pelanggan 24/7:</strong> Dukungan pelanggan yang siap membantu kapan pun Anda membutuhkannya.</li>
                        <li class="list-group-item bg-light"><strong>Penjemputan dan Pengantaran:</strong> Layanan penjemputan dan pengantaran tersedia untuk kenyamanan Anda.</li>
                    </ul></p>
                    </div>
                    <h3 class="text-white">Tentang Kami</h3>
                    <div class="card mb-4" style="background-color: #9da2a7;">
                    <p class="text-dark bg-light p-3">Jaya Rental Mobil telah melayani pelanggan di kota ini selama lebih dari 1 tahun. Kami bangga menjadi mitra perjalanan Anda dan memberikan pengalaman rental mobil yang tak tertandingi. Jadikan perjalanan Anda lebih menyenangkan dengan Jaya Rental Mobil.</p>
                    </div>
                    <h3 class="text-white">Hubungi Kami</h3>
                    <div class="card mb-4" style="background-color: #9da2a7;">
                    <p class="text-dark bg-light p-3">Ingin mengetahui lebih lanjut atau memesan mobil hari ini? Hubungi tim kami di <strong>[08987654321]</strong> atau kirimkan email ke <strong>[JayaRentalMobil@gmail.com]</strong>. Kami siap membantu Anda dengan senang hati!</p>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
