<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DataPenghuniController extends Controller
{
    public function index()
    {
        // ambil data dari tabel penghuni
        $penghuni = DB::table('penghuni')->get();

        return view('backend.v_penghuni.index', compact('penghuni'));
    }
}
