<?php

use App\Http\Controllers\AdminDaftarMakananController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarPesanan;
use App\Http\Controllers\DaftarPesananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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

// Menampilkan form login
// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');


// Menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

// Menangani proses login
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');

// Menangani proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//web
Route::get('/', [HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
 
     // Daftar Makanan
     Route::get('/daftarmakanan', [AdminDaftarMakananController::class, 'index'])->name('admin.daftarmakanan');
     Route::get('/daftarmakanan/create', [AdminDaftarMakananController::class, 'create'])->name('admin.daftarmakanan.create');
     Route::post('/daftarmakanan', [AdminDaftarMakananController::class, 'store'])->name('admin.daftarmakanan.store');
     Route::get('/daftarmakanan/{id}/edit', [AdminDaftarMakananController::class, 'edit'])->name('admin.daftarmakanan.edit');
     Route::put('/daftarmakanan/{id}', [AdminDaftarMakananController::class, 'update'])->name('admin.daftarmakanan.update');
     Route::delete('/daftarmakanan/{id}', [AdminDaftarMakananController::class, 'destroy'])->name('admin.daftarmakanan.destroy');

     //Pembayaran

     Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('admin.pembayaran');
     Route::post('/verifikasi-pembayaran/{userId}', [PembayaranController::class, 'verifikasiPembayaran'])->name('verifikasi.pembayaran');
     // web.php
    

     
     
});

Route::get('/menu/{id}/addToCart', [MenuController::class, 'addToCart'])->name('menu.addToCart');

//Daftar Pesanan
Route::get('/daftarpesanan', [DaftarPesananController::class, 'index'])->name('daftar_pesanan');
Route::get('/tambahQuantity/{id}', [DaftarPesananController::class, 'tambahQuantity'])->name('tambahQuantity');
Route::get('/kurangQuantity/{id}', [DaftarPesananController::class, 'kurangQuantity'])->name('kurangQuantity');
Route::get('/hapusDaftarPesanan/{index}', [DaftarPesananController::class, 'hapusDaftarPesanan'])->name('hapusDaftarPesanan');

//laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');





