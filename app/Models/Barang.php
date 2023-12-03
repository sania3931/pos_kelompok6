<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_barang',
        'kategori_id_kategori',
        'nama_barang',
        'berat_barang',
        'stok',
        'harga',
    ];

    
}
