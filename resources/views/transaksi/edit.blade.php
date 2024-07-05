@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header d-flex justify-content-center align-items-center">
    <h1>Form Edit Transaksi</h1>
    <a href="/transaksis" class="btn btn-primary ms-auto">Back</a>
</div>

<form action="{{ url('transaksis/'.$transaksis->id.'') }}" method="post">
    @csrf
   @method('PUT')
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="mobil_id">Nama Mobil</label>
        <div class="col-sm-10">
            <input type="text" name="mobil_id" class="form-control" value="{{ $transaksis->mobil_id }}" id="mobil_id">
                @error('Mobil Id')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="pelanggan_id">Nama Pelanggan</label>
        <div class="col-sm-10">
            <input type="text" name="pelanggan_id" class="form-control" value="{{ $transaksis->pelanggan_id }}" id="pelanggan_id">
            @error('Pelanggan Id')
                <span class="text-danger">{{ $message }}</span> 
            @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="tanggal_mulai">Tanggal Mulai</label>
        <div class="col-sm-10">
            <input type="date" name="tanggal_mulai" class="form-control" value="{{ $transaksis->tanggal_mulai }}" id="tanggal_mulai">
                @error('Tanggal Mulai')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="tanggal_selesai">Tanggal Selesai</label>
        <div class="col-sm-10">
            <input type="date" name="tanggal_selesai" class="form-control" value="{{ $transaksis->tanggal_selesai }}" id="tanggal_selesai">
                @error('Tanggal Selesai')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="total_harga">Total Harga</label>
        <div class="col-sm-10">
            <input type="number" name="total_harga" class="form-control" value="{{ $transaksis->total_harga }}" id="total_harga">
                @error('Total Harga')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
   

<div class="form-group row my-4 ps-5">
    <div class="col-sm-10 offset-sm-2">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>
</form>
</div>

@endsection


