<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Tampilkan halaman pembayaran
     */
    public function create($booking_id)
    {
        $booking = DB::table('booking')
            ->join('users', 'booking.user_id', '=', 'users.id')
            ->join('kamar', 'booking.kamar_id', '=', 'kamar.id')
            ->select(
                'booking.*',
                'users.nama as nama_penghuni',
                'kamar.nama_kamar',
                'kamar.tipe',
                'kamar.harga'
            )
            ->where('booking.id', $booking_id)
            ->first();

        if (!$booking) {
            abort(404, 'Booking tidak ditemukan');
        }

        return view('backend.v_pembayaran.create', compact('booking'));
    }

    /**
     * Simpan transaksi pembayaran
     */
    public function store(Request $request)
    {
        $request->validate([
            'booking_id'     => 'required',
            'metode_bayar'   => 'required',
            'jumlah_bayar'   => 'required|numeric'
        ]);

        DB::table('transaksi')->insert([
            'booking_id'   => $request->booking_id,
            'metode_bayar' => $request->metode_bayar,
            'jumlah_bayar' => $request->jumlah_bayar,
            'status'       => 'PAID',
            'created_at'   => now(),
            'updated_at'   => now()
        ]);

        // update status booking
        DB::table('booking')
            ->where('id', $request->booking_id)
            ->update(['status' => 'PAID']);

        return redirect('/booking')
            ->with('success', 'Pembayaran berhasil');
    }
}
