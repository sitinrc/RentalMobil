@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-center align-items-center">
        <h1>Daftar Pelanggan</h1>
        <a href="pelanggan/create" class="btn btn-primary ms-auto">Create</a>
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

    <table class="table table-bordered table-hover w-100">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->alamat }}</td>
                <td>{{ $pelanggan->no_telepon }}</td>
                <td>{{ $pelanggan->email }}</td>
                <td>
                    <a href="destroy/{{ $mobil->id }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
