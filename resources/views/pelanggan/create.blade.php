@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title text-capitalize">Form Pelanggan</h3>
            <a href="{{ route('pelanggan.index') }}" class="nav-link text-capitalize">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="form-group my-1">
                    <label for="nama" class="text-capitalize">Nama</label>
                    <input type="text" name="nama" id="nama" 
                    class="form-control @error('nama') border-danger @enderror"
                    placeholder="Nama" value="{{ old('nama') }}">
                    @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="alamat" class="text-capitalize">Alamat</label>
                    <input type="text" name="alamat" id="alamat" 
                    class="form-control @error('alamat') border-danger @enderror"
                    placeholder="Alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="no_telepon" class="text-capitalize">No Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" 
                    class="form-control @error('no_telepon') border-danger @enderror"
                    placeholder="No Telepon" value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="email" class="text-capitalize">Email</label>
                    <input type="email" name="email" id="email" 
                    class="form-control @error('email') border-danger @enderror"
                    placeholder="Email" value="{{ old('email') }}">
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