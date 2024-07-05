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
        ]);

        Mobil::create($request->all());

        return redirect()->route('mobil.index')->with('success', 'Mobil created successfully.');
    }

    public function show(Mobil $mobil)
    {
        return view('mobil.show', compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tahun' => 'required|date_format:Y',
            'harga_sewa' => 'required|numeric',
        ]);

        $mobil->update($request->all());

        return redirect()->route('mobil.index')->with('success', 'Mobil updated successfully.');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Mobil deleted successfully.');
    }
}

