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
use App\Http\Controllers\StrukturRWController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PersuratanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthRWController;
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
//         Route::resource('RW', AuthRWController::class);
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

// untuk RW, rt, Warga
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8,9,10']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk RW
Route::group(['middleware' => ['auth', 'checkrole:9']], function() {
    Route::get('/RW', [AuthRWController::class, 'index']);
});

// untuk rt
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8']], function() {
    Route::get('/RT', [AuthRtController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:10']], function() {
    Route::get('/Warga', [AuthWargaController::class, 'index']);

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
Route::resource('struktur-rw', StrukturRWController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('persuratan', PersuratanController::class);
Route::resource('user', UserController::class);

// checkpoinr

//Warga
Route::group(['prefix' => 'RW/Warga'], function (){
    Route::get('/', [WargaController::class, 'index']); // Halaman awal user
    Route::post('/list', [WargaController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [WargaController::class, 'create']); // Halaman form tambah user
    Route::post('/Warga/', [WargaController::class, 'store'])->name('RW.Warga.store'); // Menyimpan data user baru
    Route::get('/Warga/{id}', [WargaController::class, 'show'])->name('RW.Warga.show'); // Menampilkan detail user
    Route::get('/Warga/{id}/edit', [WargaController::class, 'edit'])->name('RW.Warga.edit'); // Menampilkan halaman form edit user
    Route::put('/Warga/{id}', [WargaController::class, 'update'])->name('RW.Warga.update'); // Menampilkan perubahan data user
    Route::delete('/Warga/{id}', [WargaController::class, 'destroy'])->name('RW.Warga.destroy'); // Menghapus data user
});

Route::get('/forgotpassword', function () {
    return view('auth.LupaPass');
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

Route::get('daftaRWargaRW', function () {
    return view('RW.daftaRWarga');
});

Route::get('tambahWargaRW', function () {
    return view('RW.tambahWarga');
});

Route::get('ajukansurat', function () {
    return view('Warga.ajukansurat');
});

Route::get('statussurat', function () {
    return view('Warga.statussurat');
});

Route::get('statusIuran', function () {
    return view('Warga.statusIuran');
});

Route::get('layananDarurat', function () {
    return view('dashboard.layanandarurat');
});

Route::get('pengaduan', function () {
    return view('Warga.pengaduan');
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

