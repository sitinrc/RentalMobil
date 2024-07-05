@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header d-flex justify-content-center align-items-center">
    <h1>Form Edit Mobil</h1>
    <a href="/mobils" class="btn btn-primary ms-auto">Back</a>
</div>

<form action="{{ url('mobils/'.$mobils->id.'') }}" method="post">
    @csrf
   @method('PUT')
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="nama_mobil">Nama Mobil</label>
        <div class="col-sm-10">
            <input type="text" name="nama_mobil" class="form-control" value="{{ $mobils->nama_mobil }}" id="nama_mobil">
                @error('Nama Mobil')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="merk">Merk</label>
        <div class="col-sm-10">
            <input type="text" name="merk" class="form-control" value="{{ $mobil->merk }}" id="merk">
            @error('Merk')
                <span class="text-danger">{{ $message }}</span> 
            @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="tahun">Tahun</label>
        <div class="col-sm-10">
            <input type="date" name="tahun" class="form-control" value="{{ $mobils->tahun }}" id="tahun">
                @error('Tahun')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="harga_sewa_per_hari">Harga Sewa PerHari</label>
        <div class="col-sm-10">
            <input type="number" name="harga_sewa_per_hari" class="form-control" value="{{ $mobils->stock }}" id="harga_sewa_per_hari">
                @error('Harga Sewa PerHari')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    {{-- <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="image">image</label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control" id="cover">
        </div>
    </div> --}}

<div class="form-group row my-4 ps-5">
    <div class="col-sm-10 offset-sm-2">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>
</form>
</div>

@endsection


