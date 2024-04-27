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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthRwController;
use App\Http\Controllers\AuthRtController;
use App\Http\Controllers\AuthWargaController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route::group(['middleware' => 'auth'], function () {
//     Route::group(['middleware' => ['cek_login:1']], function () {
//         Route::resource('rw', AuthRwController::class);
//     });
//     Route::group(['middleware' => ['cek_login:2']], function () {
//         Route::resource('rt',AuthRtController::class);
//     });
//     Route::group(['middleware' => ['cek_login:3']], function () {
//         Route::resource('rt',AuthWargaController::class);
//     });
// });

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk rw, rt, warga
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8,9,10']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk rw
Route::group(['middleware' => ['auth', 'checkrole:9']], function() {
    Route::get('/rw', [AuthRwController::class, 'index']);
});

// untuk rt
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8']], function() {
    Route::get('/rt', [AuthRtController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:10']], function() {
    Route::get('/warga', [AuthWargaController::class, 'index']);

});

// JANGAN DI OTAK ATIK DULU BUAT CRUD
Route::resource('tata-tertib', TataTertibController::class);
Route::resource('berita', BeritaController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('layanan-darurat', LayananDaruratController::class);
Route::resource('kartu-keluarga', KartuKeluargaController::class);
Route::resource('iuran', IuranController::class);
Route::resource('fasilitas-umum', FasilitasUmumController::class);
Route::resource('penduduk', WargaController::class);
Route::resource('struktur-rw', StrukturRwController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('persuratan', PersuratanController::class);
Route::resource('user', UserController::class);

// checkpoinr


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

