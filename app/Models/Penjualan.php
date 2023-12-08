<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $guarded = 'id_penjualan';
    protected $primaryKey = 'id_penjualan';
    public $timestamps = false;
    protected $fillable = [
        'id_penjualan',
        'user_iduser',
        'tgl_penjualan',
        'total',
        'tgl_input',
    ];
}
