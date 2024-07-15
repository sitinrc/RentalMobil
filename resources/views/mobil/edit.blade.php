@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Mobil</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('mobil.update', $mobil->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-1">
                <label for="nama_mobil" class="text-capitalize">Nama Mobil</label>
                <input type="text" name="nama_mobil" id="nama_mobil" 
                       class="form-control @error('nama_mobil') border-danger @enderror"
                       value="{{ old('nama_mobil', $mobil->nama_mobil) }}">
                @error('nama_mobil')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="merk" class="text-capitalize">Merk</label>
                <input type="text" name="merk" id="merk" 
                       class="form-control @error('merk') border-danger @enderror"
                       value="{{ old('merk', $mobil->merk) }}">
                @error('merk')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="tahun" class="text-capitalize">Tahun</label>
                <input type="text" name="tahun" id="tahun" 
                       class="form-control @error('tahun') border-danger @enderror"
                       value="{{ old('tahun', $mobil->tahun) }}">
                @error('tahun')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="harga_sewa_per_hari" class="text-capitalize">Harga Sewa per Hari</label>
                <input type="text" name="harga_sewa_per_hari" id="harga_sewa_per_hari" 
                       class="form-control @error('harga_sewa_per_hari') border-danger @enderror"
                       value="{{ old('harga_sewa_per_hari', $mobil->harga_sewa_per_hari) }}">
                @error('harga_sewa_per_hari')
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