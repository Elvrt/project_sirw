<?php

use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LayananDaruratController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\KartuKeluargaController;
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

// JANGAN DI OTAK ATIK DULU BUAT CRUD
Route::resource('tata-tertib', TataTertibController::class);
Route::resource('berita', BeritaController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('layanan-darurat', LayananDaruratController::class);
Route::resource('kartu-keluarga', KartuKeluargaController::class);

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/forgotpassword', function () {
    return view('login.LupaPass');
});

Route::get('/dashboard', function () {
    return view('warga.dashboard');
});

Route::get('/profil', function () {
    return view('warga.ProfilRW');
});

Route::get('/info', function () {
    return view('warga.info');
});

Route::get('/layanan', function () {
    return view('warga.layanan');
});

Route::get('pengajuansurat', function () {
    return view('warga.pengajuansurat');
});

Route::get('daftarwargaRW', function () {
    return view('RW.daftarwarga');
});

Route::get('tambahwargaRW', function () {
    return view('RW.tambahwarga');
});

Route::get('ajukansurat', function () {
    return view('warga.ajukansurat');
});

Route::get('statussurat', function () {
    return view('warga.statussurat');
});

