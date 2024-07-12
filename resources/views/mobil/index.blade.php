<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil - Rental Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Mobil</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Harga Sewa per Hari</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mobil->nama_mobil }}</td>
                <td>{{ $mobil->merk }}</td>
                <td>{{ $mobil->tahun }}</td>
                <td>{{ number_format($mobil->harga_sewa_per_hari, 2) }}</td>
                <td>
                    <a href="destroy/{{ $mobil->id }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
