@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-center align-items-center">
        <b> <h1>Daftar Mobil</h1> </b>
        <a href="mobil/create" class="btn btn-primary ms-auto">Create</a>
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
                <th>Nama Mobil</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Harga Sewa per Hari</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mobil->nama_mobil }}</td>
                <td>{{ $mobil->merk }}</td>
                <td>{{ $mobil->tahun }}</td>
                <td>{{ number_format($mobil->harga_sewa_per_hari, 2) }}</td>
                <td>
                    <a href="destroy/{{ $mobil->id }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
