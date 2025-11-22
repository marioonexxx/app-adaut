<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard');
    }

    public function show_paketwisata()
    {

        $pakets = Paket::latest()->get();
        return view('administrator.paketwisata',compact('pakets'));
    }

    public function store_paketwisata(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:100',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'fasilitas' => 'required|string',
            'itenary' => 'required|string',
        ]);        

        //save image
        $path = $request->file('gambar')->store('img_paketwisata','public');

        Paket::create([
            'kode' =>$request->kode,
            'nama' =>$request->nama,
            'deskripsi' =>$request->deskripsi,
            'fasilitas' =>$request->fasilitas,
            'itenary' =>$request->itenary,
            'gambar' => $path, 
        ]);

        return redirect()->back()->with('success','Data berhasil ditambahkan');

    }

    public function edit_paketwisata($id)
    {
        $paket = Paket::findOrFail($id);
        return view('administrator.paketwisataedit',compact('paket'));
    }

    public function update_paketwisata(Request $request, $id)
    {
        $request->validate([
        'kode' => 'required|string|max:100',
        'nama' => 'required|string|max:100',
        'deskripsi' => 'required|string',
        'fasilitas' => 'required|string',
        'itenary' => 'required|string',
        'gambar' => 'nullable|image|max:2048',
    ]);

    $paket = Paket::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('img_paketwisata', 'public');
        $paket->gambar = $path;
    }

    $paket->update([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'fasilitas' => $request->fasilitas,
        'itenary' => $request->itenary,
        'gambar' => $paket->gambar, // tetap gunakan gambar lama jika tidak diganti
    ]);

    return redirect()->route('administrator.editpaketwisata', $id)->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy_paketwisata($id)
    {
        $paket = Paket::findOrFail($id);

    // Hapus gambar jika ada
    if ($paket->gambar && Storage::disk('public')->exists($paket->gambar)) {
        Storage::disk('public')->delete($paket->gambar);
    }

    // Hapus data paket dari database
    $paket->delete();

    return redirect()->route('administrator.showpaketwisata')->with('success', 'Data berhasil dihapus');
    }

    // Show data kontak
    public function show_kontak()
    {
        $listKontak = Kontak::latest()->get();
        return view('administrator.kontak', compact('listKontak'));
    }

    


}
