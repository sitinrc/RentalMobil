<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan daftar semua mobil
    public function indexMobil()
    {
        $mobils = Mobil::all();
        return response()->json($mobils);
    }

    // Menampilkan daftar semua pelanggan
    public function indexPelanggan()
    {
        $pelanggans = Pelanggan::all();
        return response()->json($pelanggans);
    }

    // Menampilkan daftar semua transaksi
    public function indexTransaksi()
    {
        $transaksis = Transaksi::with(['mobil', 'pelanggan'])->get();
        return response()->json($transaksis);
    }

    // Menyimpan data mobil baru
    public function storeMobil(Request $request)
    {
        $mobil = Mobil::create($request->all());
        return response()->json($mobil, 201);
    }

    // Menyimpan data pelanggan baru
    public function storePelanggan(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());
        return response()->json($pelanggan, 201);
    }

    // Menyimpan data transaksi baru
    public function storeTransaksi(Request $request)
    {
        $transaksi = Transaksi::create($request->all());
        return response()->json($transaksi, 201);
    }

    // Mengupdate data mobil
    public function updateMobil(Request $request, Mobil $mobil)
    {
        $mobil->update($request->all());
        return response()->json($mobil);
    }

    // Mengupdate data pelanggan
    public function updatePelanggan(Request $request, Pelanggan $pelanggan)
    {
        $pelanggan->update($request->all());
        return response()->json($pelanggan);
    }

    // Mengupdate data transaksi
    public function updateTransaksi(Request $request, Transaksi $transaksi)
    {
        $transaksi->update($request->all());
        return response()->json($transaksi);
    }

    // Menghapus data mobil
    public function destroyMobil(Mobil $mobil)
    {
        $mobil->delete();
        return response()->json(null, 204);
    }

    // Menghapus data pelanggan
    public function destroyPelanggan(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return response()->json(null, 204);
    }

    // Menghapus data transaksi
    public function destroyTransaksi(Transaksi $transaksi)
    {
        $transaksi->delete();
        return response()->json(null, 204);
    }
}
