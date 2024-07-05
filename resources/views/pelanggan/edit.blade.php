@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header d-flex justify-content-center align-items-center">
    <h1>Form Edit Pelanggan </h1>
    <a href="/pelanggans" class="btn btn-primary ms-auto">Back</a>
</div>

<form action="{{ url('pelanggans/'.$pelanggans->id.'') }}" method="post">
    @csrf
   @method('PUT')
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="nama">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" value="{{ $pelanggans->nama }}" id="nama">
                @error('Nama')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="alamat">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" value="{{ $pelanggans->alamat }}" id="alamat">
            @error('Alamat')
                <span class="text-danger">{{ $message }}</span> 
            @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="no_telepon">No Telepon</label>
        <div class="col-sm-10">
            <input type="number" name="no_telepon" class="form-control" value="{{ $pelanggans->no_telepon }}" id="no_telepon">
                @error('No Telepon')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    <div class="form-group row mt-3 ps-5 pe-5">
        <label class="col-sm-2" for="email">Email</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" value="{{ $pelanggans->email }}" id="email">
                @error('Email')
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
        </div>
    </div>
    

<div class="form-group row my-4 ps-5">
    <div class="col-sm-10 offset-sm-2">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>
</form>
</div>

@endsection

