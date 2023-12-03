<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_suplier',
        'nama_suplier',
        'alamat',
        'sales',
        'no_hp',
    ];
}
