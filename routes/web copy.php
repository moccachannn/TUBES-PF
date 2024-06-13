<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DetailPeminjamanController;
use App\Http\Controllers\TransaksiPeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('shop.show');
Route::get('/transaksi-peminjaman/create', [TransaksiPeminjamanController::class, 'create'])->name('transaksi_peminjaman.create');
Route::post('/transaksi-peminjaman', [TransaksiPeminjamanController::class, 'store'])->name('transaksi_peminjaman.store');
Route::get('/transaksi-peminjaman', [TransaksiPeminjamanController::class, 'index'])->name('transaksi_peminjaman.index');
