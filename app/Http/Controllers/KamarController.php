<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        // DEBUG PALING PENTING
        // Kalau ini TIDAK muncul → controller tidak kepanggil
        // dd('MASUK CONTROLLER KAMAR');

        $kamars = [
            [
                'id' => 1,
                'nomor_kamar' => 'A01',
                'tipe_kamar' => 'Single',
                'harga' => 750000,
                'status' => 'tersedia',
            ],
            [
                'id' => 2,
                'nomor_kamar' => 'A02',
                'tipe_kamar' => 'VIP',
                'harga' => 1200000,
                'status' => 'terisi',
            ],
        ];

        return view('backend.v_kamar.index', compact('kamars'));
    }

   public function show($id)
{
    // simulasi data kamar
    $kamar = [
        'id' => $id,
        'nomor_kamar' => 'A0' . $id,
        'tipe_kamar' => $id == 2 ? 'VIP' : 'Single',
        'harga' => $id == 2 ? 1200000 : 750000,
        'status' => $id == 2 ? 'terisi' : 'tersedia',
        'fasilitas' => 'Kasur, Lemari, AC, Kamar Mandi Dalam',
    ];

    return view('backend.v_kamar.show', compact('kamar'));
}

}
