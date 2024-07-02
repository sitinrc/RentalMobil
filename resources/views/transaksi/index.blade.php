<!DOCTYPE html>
<html>
<head>
    <title>Daftar Transaksi - Rental Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Transaksi</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Mulai</th> 
                <th>Tanggal Selesai</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->mobil->nama_mobil }}</td>
                <td>{{ $transaksi->pelanggan->nama }}</td>
                <td>{{ $transaksi->tanggal_mulai }}</td>
                <td>{{ $transaksi->tanggal_selesai }}</td>
                <td>{{ number_format($transaksi->total_harga, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
