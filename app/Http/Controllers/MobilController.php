<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tahun' => 'required|date_format:Y',
            'harga_sewa' => 'required|numeric',
            
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tahun' => 'required',
        ]);

        Mobil::create($request->all());

        return redirect()->route('mobils.index')->with('success', 'Mobil created successfully.');
    }

    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'harga_sewa_per_hari' => 'required|numeric',
        ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->merk = $request->merk;
        $mobil->tahun = $request->tahun;
        $mobil->harga_sewa_per_hari = $request->harga_sewa_per_hari;
        $mobil->save();

        return redirect()->route('mobil.index')->with('success-status', 'Mobil berhasil diperbarui.');
    }


    public function destroy(Mobil $mobil)
    {
        $mobil->delete();


        return redirect()->route('mobil.index')
                         ->with('success', 'mobils berhasil dihapus.');
    
    }
}