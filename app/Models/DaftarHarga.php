<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DaftarHarga extends Model
{
    // use HasFactory;

    protected $guarded = ['id'];

    public function lokasis()
    {
        return $this->belongsToMany(Lokasi::class, 'daftarharga_lokasi', 'id', 'daftarharga_id', 'lokasi_id');
    }
}
