<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobils.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobils.create');
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

        return redirect()->route('mobils.index')->with('success', 'Mobil created successfully.');
    }

    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
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

        return redirect()->route('mobils.index')->with('success', 'Mobil updated successfully.');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobils.index')->with('success', 'Mobil deleted successfully.');
    }
}

