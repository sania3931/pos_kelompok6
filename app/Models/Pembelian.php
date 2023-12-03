<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pembelian',
        'suplier_id_suplier',
        'user_iduser',
        'no_faktur',
        'tgl_pembelian',
        'total',
        'tgl_input',
    ];
}
