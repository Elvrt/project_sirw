<?php

use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LayananDaruratController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\FasilitasUmumController;
use App\Http\Controllers\WargaController;
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
Route::resource('iuran', IuranController::class);
Route::resource('fasilitas-umum', FasilitasUmumController::class);
Route::resource('warga', WargaController::class);


Route::get('/login', function () {
    return view('login.login');
});

Route::get('/forgotpassword', function () {
    return view('login.LupaPass');
});

Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});

Route::get('/profil', function () {
    return view('Dashboard.ProfilRW');
});

Route::get('/info', function () {
    return view('Dashboard.info');
});

Route::get('/layanan', function () {
    return view('Dashboard.layanan');
});

Route::get('pengajuansurat', function () {
    return view('Dashboard.pengajuansurat');
});

Route::get('daftarwargaRW', function () {
    return view('RW.daftarwarga');
});

Route::get('tambahwargaRW', function () {
    return view('RW.tambahwarga');
});
