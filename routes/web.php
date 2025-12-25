<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\DataPenghuniController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| AUTH / LOGIN
|--------------------------------------------------------------------------
*/
Route::post('/backend/login', [LoginController::class, 'login'])
    ->name('backend.login');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| KAMAR
|--------------------------------------------------------------------------
*/
Route::get('/kamar', [KamarController::class, 'index'])
    ->name('kamar.index');

Route::get('/kamar/{id}', [KamarController::class, 'show'])
    ->name('kamar.show');

/*
|--------------------------------------------------------------------------
| PENGHUNI
|--------------------------------------------------------------------------
| (pakai SATU controller saja agar tidak bentrok)
*/
Route::resource('penghuni', DataPenghuniController::class);

/*
|--------------------------------------------------------------------------
| BOOKING
|--------------------------------------------------------------------------
*/
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/book/{kamar_id}', [BookingController::class, 'bookDirect'])->name('booking.bookDirect');
/*
|--------------------------------------------------------------------------
| PEMBAYARAN / TRANSAKSI
|--------------------------------------------------------------------------
*/
Route::get('/pembayaran/{booking}', [TransaksiController::class, 'create'])
    ->name('pembayaran.create');

Route::post('/pembayaran', [TransaksiController::class, 'store'])
    ->name('pembayaran.store');

/*
|--------------------------------------------------------------------------
| TEST VIEW (OPSIONAL)
|--------------------------------------------------------------------------
*/
Route::get('/tes-view', function () {
    return view('backend.v_dashboard.index');
});

Route::get('/booking/book/{kamar_id}', [BookingController::class, 'bookDirect'])->name('booking.bookDirect');
