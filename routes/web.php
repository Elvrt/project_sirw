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
use App\Http\Controllers\StrukturRwController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PersuratanController;
use App\Http\Controllers\UserController;
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
Route::resource('struktur-rw', StrukturRwController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('persuratan', PersuratanController::class);
Route::resource('user', UserController::class);


Route::get('/login', function () {
    return view('login.login');
});

Route::get('/forgotpassword', function () {
    return view('login.LupaPass');
});

Route::get('/', function () {
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

Route::get('ajukansurat', function () {
    return view('warga.ajukansurat');
});

Route::get('statussurat', function () {
    return view('warga.statussurat');
});

Route::get('statusIuran', function () {
    return view('warga.statusIuran');
});

Route::get('layananDarurat', function () {
    return view('dashboard.layanandarurat');
});

Route::get('pengaduan', function () {
    return view('warga.pengaduan');
});

Route::get('fasum', function () {
    return view('dashboard.fasilitasumum');
});

Route::get('berita', function () {
    return view('dashboard.berita');
});


Route::get('agenda', function () {
    return view('dashboard.agenda');
});

