@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title text-capitalize">Form Mobil</h3>
            <a href="{{ route('mobil.index') }}" class="nav-link text-capitalize">Back</a>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
                
            <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group my-1">
                    <label for="nama_mobil" class="text-capitalize">Nama Mobil</label>
                    <input type="text" name="nama_mobil" id="nama_mobil" 
                    class="form-control @error('nama_mobil') border-danger @enderror"
                    placeholder="Nama Mobil" value="{{ old('nama_mobil') }}">
                    @error('nama_mobil')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="merk" class="text-capitalize">Merk</label>
                    <input type="text" name="merk" id="merk" 
                    class="form-control @error('merk') border-danger @enderror"
                    placeholder="Merk" value="{{ old('merk') }}">
                    @error('merk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="tahun" class="text-capitalize">Tahun</label>
                    <input type="number" name="tahun" id="tahun" 
                    class="form-control @error('tahun') border-danger @enderror"
                    placeholder="Tahun" value="{{ old('tahun') }}">
                    @error('tahun')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <label for="harga_sewa_per_hari" class="text-capitalize">Harga Sewa Perhari</label>
                    <input type="number" name="harga_sewa_per_hari" id="harga_sewa_per_hari" 
                    class="form-control @error('harga_sewa_per_hari') border-danger @enderror"
                    placeholder="Harga Sewa Perhari" value="{{ old('harga_sewa_per_hari') }}">
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