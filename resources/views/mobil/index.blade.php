@extends('layouts.app')

@section('content')

<div class="card bg-light">
    <div class="card-header d-flex justify-content-center align-items-center bg-secondary text-white">
        <b> <h1>Daftar Mobil</h1> </b>
       
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
</div>

    <table class="table table-bordered table-hover w-100 bg-white">
        <thead class="bg-secondary text-white">
            <tr class="table-secondary" >
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Harga Sewa per Hari</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
            <tr >
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mobil->nama_mobil }}</td>
                <td>{{ $mobil->merk }}</td>
                <td>{{ $mobil->tahun }}</td>
                <td>{{ $mobil->harga_sewa_per_hari }}</td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
