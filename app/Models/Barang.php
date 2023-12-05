<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = 'id_barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;
    protected $fillable = [
        'id_barang',
        'kategori_id_kategori',
        'kode_barang',
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'stok',
    ];


}
