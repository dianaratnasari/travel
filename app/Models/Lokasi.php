<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lokasi extends Model
{
    //use HasFactory;

    public function daftar_hargas()
    {
        return $this->belongsToMany(DaftarHarga::class);
    }
}
