@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title text-capitalize">Form Transaksi</h3>
            <a href="{{ route('transaksis.index') }}" class="nav-link text-capitalize">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('transaksis.store') }}" method="POST">
                @csrf
                <div class="form-group my-1">
                    <label for="mobil_id" class="text-capitalize">Mobil</label>
                    <input type="text" name="mobil_id" id="mobil_id" 
                    class="form-control @error('mobil_id') border-danger @enderror"
                    placeholder="Mobil ID" value="{{ old('mobil_id') }}">
                    @error('mobil_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="pelanggan_id" class="text-capitalize">Pelanggan</label>
                    <input type="text" name="pelanggan_id" id="pelanggan_id" 
                    class="form-control @error('pelanggan_id') border-danger @enderror"
                    placeholder="Pelanggan ID" value="{{ old('pelanggan_id') }}">
                    @error('pelanggan_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="tanggal_mulai" class="text-capitalize">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" 
                    class="form-control @error('tanggal_mulai') border-danger @enderror"
                    placeholder="Tanggal Mulai" value="{{ old('tanggal_mulai') }}">
                    @error('tanggal_mulai')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="tanggal_selesai" class="text-capitalize">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" id="tanggal_selesai" 
                    class="form-control @error('tanggal_selesai') border-danger @enderror"
                    placeholder="Tanggal Selesai" value="{{ old('tanggal_selesai') }}">
                    @error('tanggal_selesai')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="total_harga" class="text-capitalize">Total Harga</label>
                    <input type="text" name="total_harga" id="total_harga" 
                    class="form-control @error('total_harga') border-danger @enderror"
                    placeholder="Total Harga" value="{{ old('total_harga') }}">
                    @error('total_harga')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mt-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-sm text-capitalize">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
