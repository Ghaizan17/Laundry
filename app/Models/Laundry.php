<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'no_hp',
        'berat',
        'catatan',
        'jenis_layanan',
        'total_harga',
    ];
}
