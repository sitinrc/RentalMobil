<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        
        $mobil = Mobil::select('id', 'nama_mobil')->get();
        $pelanggan = Pelanggan::select('id', 'nama')->get();
        return view('transaksi.create', ['mobil' => $mobil], ['pelanggan' => $pelanggan]);
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

        return redirect()->route('transaksi.index')
                         ->with('success', 'Transaksi berhasil dibuat.');
    }

    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $mobil = Mobil::all();
        $pelanggan = Pelanggan::all();
        return view('transaksi.edit', compact('transaksi', 'mobil', 'pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mobil_id' => 'required|exists:mobils,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'total_harga' => 'required|numeric',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->mobil_id = $request->mobil_id;
        $transaksi->pelanggan_id = $request->pelanggan_id;
        $transaksi->tanggal_mulai = $request->tanggal_mulai;
        $transaksi->tanggal_selesai = $request->tanggal_selesai;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success-status', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.ind  ex')
                         ->with('success', 'Transaksi berhasil dihapus.');
    }
} 