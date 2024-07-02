@extends('layouts.app')

@section('content')
<div class="header-custom text-center mb-4 bg-primary text-white">
    <h1>Selamat Datang di Jaya Rental Mobil</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('image/welcome-image.jpg') }}" class="img-fluid custom-img mb-4" alt="welcome image">
        </div>
        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body card-body-custom">
                    <h3><p class="text-primary">Jelajahi Koleksi Mobil Kami</p></h3>
                    <p>Temukan kendaraan yang sempurna untuk perjalanan Anda dengan Jaya Rental Mobil. Kami menawarkan berbagai pilihan mobil berkualitas dengan harga terbaik di kota ini. Mulai dari mobil keluarga yang nyaman hingga kendaraan mewah untuk perjalanan bisnis, kami memiliki semua yang Anda butuhkan.</p>

                    <h3 class="text-primary">Mengapa Memilih Jaya Rental Mobil?</h3>
                    <ul class="text-dark">
                        <li><strong>Koleksi Mobil Terlengkap:</strong> Temukan berbagai pilihan mobil dari berbagai merek terkenal.</li>
                        <li><strong>Kenyamanan dan Keamanan:</strong> Kami mengutamakan kenyamanan dan keamanan pelanggan kami.</li>
                        <li><strong>Harga Terbaik:</strong> Dapatkan harga sewa mobil yang kompetitif dengan layanan yang luar biasa.</li>
                        <li><strong>Pesan dengan Mudah:</strong> Proses pemesanan yang cepat dan mudah melalui platform online kami.</li>
                    </ul>

                    <h3 class="text-primary">Layanan Kami</h3>
                    <ul class="text-dark">
                        <li><strong>Sewa Harian, Mingguan, atau Bulanan:</strong> Fleksibilitas untuk memenuhi kebutuhan perjalanan Anda.</li>
                        <li><strong>Layanan Pelanggan 24/7:</strong> Dukungan pelanggan yang siap membantu kapan pun Anda membutuhkannya.</li>
                        <li><strong>Penjemputan dan Pengantaran:</strong> Layanan penjemputan dan pengantaran tersedia untuk kenyamanan Anda.</li>
                    </ul>

                    <h3 class="text-primary">Tentang Kami</h3>
                    <p class="text-dark">Jaya Rental Mobil telah melayani pelanggan di kota ini selama lebih dari 1 tahun. Kami bangga menjadi mitra perjalanan Anda dan memberikan pengalaman rental mobil yang tak tertandingi. Jadikan perjalanan Anda lebih menyenangkan dengan Jaya Rental Mobil.</p>

                    <h3 class="text-primary">Hubungi Kami</h3>
                    <p class="text-dark">Ingin mengetahui lebih lanjut atau memesan mobil hari ini? Hubungi tim kami di <strong>[nomor telepon]</strong> atau kirimkan email ke <strong>[alamat email]</strong>. Kami siap membantu Anda dengan senang hati!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
