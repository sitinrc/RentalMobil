<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        // Menampilkan daftar pelanggan
    }

    public function create()
    {
        return view('pelanggans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:pelanggans',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggans.index')->with('success', 'Pelanggan created successfully.');
    }

    // Metode lain seperti edit, update, destroy bisa ditambahkan sesuai kebutuhan
}
