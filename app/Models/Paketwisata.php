<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketwisata extends Model
{
    use HasFactory;
    protected $table = 'paket_wisata';
    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'durasi_hari',
        'harga',
        'foto',
        'status',
        'kategori',

    ];
}
