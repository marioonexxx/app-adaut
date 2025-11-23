<?php

namespace App\Http\Controllers;

use App\Models\Paketwisata;
use App\Models\Testimonipaketwisata;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $testimonis = TestimoniPaketWisata::latest()->get();
        // Ambil paket wisata aktif, misal limit 8 untuk featured
        $pakets = Paketwisata::where('status', 1)->latest()->take(8)->get();

        // Kirim data ke view
        return view('homepage.index', compact('pakets', 'testimonis'));
    }

    public function listPaket()
    {
        $pakets = Paketwisata::latest()->take(8)->get(); // atau semua
        return view('homepage.listpaketwisata', compact('pakets'));
    }

    public function tentangAdaut()
    {
        return view('homepage.tentang');
    }

    public function detailPaketwisata($id)
    {
        $paket = Paketwisata::find($id); // lengkap dengan gallery jika ada
        return view('homepage.paketwisatadetail', compact('paket'));
    }

    public function insertTestimonial()
    {
        $pakets = Paketwisata::all();
        return view('homepage.testimonial-insert', compact('pakets'));
    }
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'paket_id' => 'required|exists:paket_wisata,id',
            'nama' => 'required|string|max:255',
            'isi_testimoni' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'foto' => 'nullable|image|max:5120', // max 5MB
        ]);

        $data = $request->only('paket_id', 'nama', 'isi_testimoni', 'rating');

        // upload foto ke public disk
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimoni', 'public');
        }

        Testimonipaketwisata::create($data);

        return redirect()->back()->with('success', 'Testimonial Anda berhasil dikirim. Terima kasih!');
    }
}
