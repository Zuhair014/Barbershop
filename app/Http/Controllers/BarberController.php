<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::latest()->get();

        return view('admin.barbers.index', compact('barbers'));
    }

    public function create()
    {
        return view('admin.barbers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barber' => 'required',
            'spesialis' => 'required',
            'jadwal' => 'required',
            'foto' => 'nullable|image'
        ]);

        $foto = null;

        if($request->hasFile('foto')){

            $foto = $request->file('foto')
                ->store('barbers', 'public');
        }

        Barber::create([
            'nama_barber' => $request->nama_barber,
            'spesialis' => $request->spesialis,
            'jadwal' => $request->jadwal,
            'foto' => $foto
        ]);

        return redirect('/barbers')
            ->with('success', 'Data barber berhasil ditambah');
    }

    public function edit(Barber $barber)
    {
        return view('admin.barbers.edit', compact('barber'));
    }

    public function update(Request $request, Barber $barber)
    {
        $barber->update([
            'nama_barber' => $request->nama_barber,
            'spesialis' => $request->spesialis,
            'jadwal' => $request->jadwal
        ]);

        return redirect('/barbers')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Barber $barber)
    {
        $barber->delete();

        return redirect('/barbers')
            ->with('success', 'Data berhasil dihapus');
    }
}