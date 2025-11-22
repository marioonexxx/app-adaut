<?php

namespace App\Http\Controllers;

use App\Models\Paketwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketWisataController extends Controller
{
    public function index()
    {
        $pakets = Paketwisata::orderBy('id', 'DESC')->get();
        return view('administrator.paketwisata.index', compact('pakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket'   => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'durasi_hari'  => 'required|integer|min:1',
            'harga'        => 'required|numeric',
            'kategori'     => 'nullable|string|max:100',
            'foto'         => 'nullable|image|max:2048',
        ]);

        $path = $request->file('foto') ? $request->file('foto')->store('paket', 'public') : null;

        Paketwisata::create([
            'nama_paket'   => $request->nama_paket,
            'deskripsi'    => $request->deskripsi,
            'durasi_hari'  => $request->durasi_hari,
            'harga'        => $request->harga,
            'foto'         => $path,
            'kategori'     => $request->kategori,
            'status'       => 1
        ]);

        return back()->with('success', 'Paket wisata berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $paket = Paketwisata::findOrFail($id);

        $request->validate([
            'nama_paket'   => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'durasi_hari'  => 'required|integer|min:1',
            'harga'        => 'required|numeric',
            'kategori'     => 'nullable|string|max:100',
            'foto'         => 'nullable|image|max:2048',
        ]);

        $path = $paket->foto;

        if ($request->file('foto')) {
            if ($paket->foto) Storage::disk('public')->delete($paket->foto);
            $path = $request->file('foto')->store('paket', 'public');
        }

        $paket->update([
            'nama_paket'   => $request->nama_paket,
            'deskripsi'    => $request->deskripsi,
            'durasi_hari'  => $request->durasi_hari,
            'harga'        => $request->harga,
            'foto'         => $path,
            'kategori'     => $request->kategori,
        ]);

        return back()->with('success', 'Paket wisata berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $paket = Paketwisata::findOrFail($id);

        if ($paket->foto) {
            Storage::disk('public')->delete($paket->foto);
        }

        $paket->delete();

        return back()->with('success', 'Paket wisata berhasil dihapus.');
    }
}
