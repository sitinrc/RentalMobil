@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-center align-items-center">
        <h1>Daftar Transaksi</h1>
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary ms-auto">Create</a>
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

    <table class="table">
        <thead>
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
                    <a href="{{ route('transaksi.destroy', $transaksi->id) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
