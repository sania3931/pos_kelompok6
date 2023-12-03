<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tr_Pembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tr_pembelian',
        'barang_id_barang',
        'pembelian_id_pembelian',
        'jumlah',
        'harga',
        'sub_total',
    ];
}
