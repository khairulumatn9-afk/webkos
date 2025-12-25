<?php

namespace App\Http\Controllers;

class PenghuniController extends Controller
{
public function index()
{
    $penghunis = [
        [
            'id' => 1,
            'nama' => 'Budi Santoso',
            'kamar' => 'A-01',
            'lantai' => 1,
            'hp' => '081234567890',
            'status' => 'aktif',
            'pembayaran' => 'lunas',
            'tgl_masuk' => '2024-01-15',
        ],
        [
            'id' => 2,
            'nama' => 'Siti Aminah',
            'kamar' => 'B-03',
            'lantai' => 2,
            'hp' => '082345678901',
            'status' => 'aktif',
            'pembayaran' => 'belum',
            'tgl_masuk' => '2024-03-01',
        ],
        [
            'id' => 3,
            'nama' => 'Rizky Pratama',
            'kamar' => 'C-02',
            'lantai' => 3,
            'hp' => '083456789012',
            'status' => 'nonaktif',
            'pembayaran' => 'lunas',
            'tgl_masuk' => '2023-12-10',
        ],
    ];

    return view('backend.v_penghuni.index', compact('penghunis'));
}

}
