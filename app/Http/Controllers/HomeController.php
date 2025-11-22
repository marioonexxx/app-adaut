<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Paket;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $paketList = Paket::latest()->get(); // atau ->paginate(6);
        $testimonial = Testimonial::latest()->get();


        return view('homepage.home', compact('paketList','testimonial'));
    }

    // Kontak Proses



    public function save_kontak(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);

        Kontak::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);


        return redirect()->to('/#contact')->with('success', 'Pesan anda berhasil dikirim.');
    }

    public function show_paket($id)
    {
        $paket = Paket::findOrFail($id);
        return view('homepage.detailpaket', compact('paket'));
    }

    public function testimonial()
    {

        $listPaket = Paket::all();
        return view('homepage.testimonial', compact('listPaket'));
    }

    public function testimonial_submit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'paket' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'pesan' => 'required|string',
        ]);

        Testimonial::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'paket' => $request->paket,
            'rating' => $request->rating,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
    }
}
