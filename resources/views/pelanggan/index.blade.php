<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pelanggan - Rental Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Pelanggan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->alamat }}</td>
                <td>{{ $pelanggan->no_telepon }}</td>
                <td>{{ $pelanggan->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
