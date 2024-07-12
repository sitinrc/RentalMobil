@extends('layouts.app')

@section('content')

<div class="card bg-light">
    <div class="card-header d-flex justify-content-center align-items-center bg-secondary text-white">
        <b><h1>Daftar Transaksi</h1></b>
        <a href="transaksi/create" class="btn btn-primary ms-auto">Create</a>
    </div>
    @if (session('success-status'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success-status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('danger-status'))
    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        {{ session('danger-status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

    <table class="table table-bordered table-hover w-100 bg-white">
        <thead class="bg-dark text-white">
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Mulai</th> 
                <th>Tanggal Selesai</th>
                <th>Total Harga</th>
                <th>Option</th>
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
                <td>
                    <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection