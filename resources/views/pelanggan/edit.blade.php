@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Pelanggan</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-1">
                <label for="nama" class="text-capitalize">Nama</label>
                <input type="text" name="nama" id="nama" 
                       class="form-control @error('nama') border-danger @enderror"
                       value="{{ old('nama', $pelanggan->nama) }}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="alamat" class="text-capitalize">Alamat</label>
                <input type="text" name="alamat" id="alamat" 
                       class="form-control @error('alamat') border-danger @enderror"
                       value="{{ old('alamat', $pelanggan->alamat) }}">
                @error('alamat')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="no_telepon" class="text-capitalize">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" 
                       class="form-control @error('no_telepon') border-danger @enderror"
                       value="{{ old('no_telepon', $pelanggan->no_telepon) }}">
                @error('no_telepon')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="email" class="text-capitalize">Email</label>
                <input type="email" name="email" id="email" 
                       class="form-control @error('email') border-danger @enderror"
                       value="{{ old('email', $pelanggan->email) }}">
                @error('email')
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