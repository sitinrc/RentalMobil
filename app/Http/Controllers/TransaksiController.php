<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksis.index', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mobil_id' => 'required|exists:mobils,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksis.index')
                         ->with('success', 'Transaksi berhasil dibuat.');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksis.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        
        $request->validate([
            'mobil_id' => 'required|exists:mobils,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksis.index')
                         ->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')
                         ->with('success', 'Transaksi berhasil dihapus.');
    }
}
