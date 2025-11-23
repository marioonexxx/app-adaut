<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Testimonipaketwisata;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimoni = Testimonipaketwisata::with('paket')->latest()->get();

        return view('administrator.testimoni.index', compact('testimoni'));
    }

    public function destroy($id)
    {
        $data = TestimoniPaketWisata::findOrFail($id);

        // Hapus foto jika ada
        if ($data->foto && file_exists(storage_path('app/public/' . $data->foto))) {
            unlink(storage_path('app/public/' . $data->foto));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Testimoni berhasil dihapus.');
    }
}
