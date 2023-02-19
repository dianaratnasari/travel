<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Lokasi;
use App\Models\DaftarHarga;

class KirimController extends Controller
{


    public function store(Request $request)
    {
        // return request()->all();
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'lberangkat' => 'required',
            'tanggal' => 'required',
            'lturun' => 'required',
            'jumlah' => 'required|max:2'

        ]);
        $today = Carbon::now()->isoFormat('dddd, D MMM Y');
        // dd($validateData);
        return redirect('https://api.whatsapp.com/send?phone=6285292798918/&text=Hallo%2C%20saya%20' . $validateData['nama'] . '.%20Saya%20mau%20pesan%20tiket%20untuk%20hari%20' . $today . '%20buat%20' . $validateData['jumlah'] . '%20orang.%20Keberangkatan%20dari%20' . $validateData['lberangkat'] . '%20ke%20' . $validateData['lturun'] . '.');
    }
}
