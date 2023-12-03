<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tr_Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tr_penjualan',
        'barang_id_barang',
        'penjualan_id_penjualan',
        'jumlah',
        'harga',
        'sub_total',
    ];
}
