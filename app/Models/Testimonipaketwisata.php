<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonipaketwisata extends Model
{
    use HasFactory;
    protected $table = 'testimoni_paket_wisata';
    protected $fillable = [
        'paket_id',
        'nama',
        'isi_testimoni',
        'rating',
        'foto',
    ];

    public function paket()
    {
        return $this->belongsTo(PaketWisata::class, 'paket_id');
    }
}
