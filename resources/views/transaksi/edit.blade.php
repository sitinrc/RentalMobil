@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Transaksi</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-1">
                <label for="mobil_id" class="text-capitalize">Mobil</label>
                <select name="mobil_id" id="mobil_id" class="form-control">
                    @foreach ($mobil as $car)
                        <option value="{{ $car->id }}" {{ $car->id == $transaksi->mobil_id ? 'selected' : '' }}>
                            {{ $car->nama_mobil }}
                        </option>
                    @endforeach
                </select>
                @error('mobil_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="pelanggan_id" class="text-capitalize">Pelanggan</label>
                <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                    @foreach ($pelanggan as $data)
                        <option value="{{ $data->id }}" {{ $data->id == $transaksi->pelanggan_id ? 'selected' : '' }}>
                            {{ $data->nama }}
                        </option>
                    @endforeach
                </select>
                @error('pelanggan_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="tanggal_mulai" class="text-capitalize">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai" 
                       class="form-control @error('tanggal_mulai') border-danger @enderror"
                       value="{{ old('tanggal_mulai', $transaksi->tanggal_mulai) }}">
                @error('tanggal_mulai')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="tanggal_selesai" class="text-capitalize">Tanggal Selesai</label>
                <input type="date" name="tanggal_selesai" id="tanggal_selesai" 
                       class="form-control @error('tanggal_selesai') border-danger @enderror"
                       value="{{ old('tanggal_selesai', $transaksi->tanggal_selesai) }}">
                @error('tanggal_selesai')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="total_harga" class="text-capitalize">Total Harga</label>
                <input type="text" name="total_harga" id="total_harga" 
                       class="form-control @error('total_harga') border-danger @enderror"
                       value="{{ old('total_harga', $transaksi->total_harga) }}">
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