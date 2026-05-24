<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image'
        ]);

        $gambar = null;

        if($request->hasFile('gambar')){

            $gambar = $request->file('gambar')
                ->store('services', 'public');
        }

        Service::create([
            'nama_layanan' => $request->nama_layanan,
            'harga' => $request->harga,
            'durasi' => $request->durasi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ]);

        return redirect('/services')
            ->with('success', 'Data berhasil ditambah');
    }
}