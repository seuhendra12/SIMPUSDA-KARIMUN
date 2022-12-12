<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengunjungFrontEndController;
use App\Http\Controllers\BukuFrontEndController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('logout', [LoginController::class,'logout']);
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('dashboard', [DashboardController::class,'banyak'])->middleware('auth');
Route::resource('anggota-dashboard', AnggotaController::class)->middleware('auth');
Route::resource('buku-dashboard', BukuController::class)->middleware('auth');
Route::resource('transaksi-dashboard', TransaksiController::class)->middleware('auth');
Route::resource('pengunjung-dashboard', PengunjungController::class)->middleware('auth');
Route::resource('inventaris-dashboard', InventarisController::class)->middleware('auth');
Route::resource('login-dashboard', LoginController::class)->middleware('auth');
Route::resource('pengunjung', PengunjungFrontEndController::class);
Route::resource('buku', BukuFrontEndController::class);

Route::get('laporan_anggota', [AnggotaController::class,'cetak'])->middleware('auth');
Route::get('laporan_buku', [BukuController::class,'cetak'])->middleware('auth');
Route::get('laporan_pengunjung', [PengunjungController::class,'cetak'])->middleware('auth');
Route::get('laporan_transaksi', [TransaksiController::class,'cetak'])->middleware('auth');



