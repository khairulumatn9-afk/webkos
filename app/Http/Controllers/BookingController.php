<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // List semua booking
   public function index()
{
    $booking = DB::table('booking')
                 ->join('penghuni', 'booking.penghuni_id', '=', 'penghuni.id')
                 ->select(
                     'booking.id',
                     'booking.kamar',
                     'booking.status',
                     'penghuni.nama as nama_penghuni'
                 )
                 ->get();

    return view('backend.v_booking.index', compact('booking'));
}


    // Booking langsung dari tombol
    public function bookDirect($kamar_id)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'Silakan login terlebih dahulu.');
        }

        $user_id = $user->id;

        // Ambil data kamar (simulasi)
        $kamars = [
            1 => ['id' => 1, 'nomor_kamar' => 'A01', 'tipe_kamar' => 'Single', 'status' => 'tersedia'],
            2 => ['id' => 2, 'nomor_kamar' => 'A02', 'tipe_kamar' => 'VIP', 'status' => 'terisi'],
        ];

        if (!isset($kamars[$kamar_id])) {
            return redirect()->back()->with('error', 'Kamar tidak ditemukan!');
        }

        $kamar = $kamars[$kamar_id];

        if ($kamar['status'] != 'tersedia') {
            return redirect()->back()->with('error', 'Kamar sudah terisi!');
        }

        // Simpan booking ke tabel booking
        DB::table('booking')->insert([
            'penghuni_id' => $user_id,
            'kamar' => $kamar['nomor_kamar'],
            'tgl_booking' => now(),
            'status' => 'pending',
            'catatan' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('booking.index')
                         ->with('success', "Booking berhasil: Kamar {$kamar['nomor_kamar']}");
    }
}
