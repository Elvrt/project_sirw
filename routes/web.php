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
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);

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
// Route::resource('berita', BeritaController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('layanan-darurat', LayananDaruratController::class);
Route::resource('kartu-keluarga', KartuKeluargaController::class);
Route::resource('iuran', IuranController::class);
Route::resource('fasilitas-umum', FasilitasUmumController::class);
// Route::resource('penduduk', WargaController::class);
Route::resource('struktur-rw', StrukturRWController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::resource('persuratan', PersuratanController::class);
Route::resource('user', UserController::class);

// checkpoinr

Route::group(['prefix' => 'RW/Warga'], function (){
    Route::get('/', [WargaController::class, 'index']); // Halaman awal user
    Route::post('/list', [WargaController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [WargaController::class, 'create']); // Halaman form tambah user
    Route::post('/', [WargaController::class, 'store'])->name('RW.Warga.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [WargaController::class, 'show'])->name('RW.Warga.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [WargaController::class, 'edit'])->name('RW.Warga.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [WargaController::class, 'update'])->name('RW.Warga.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [WargaController::class, 'destroy'])->name('RW.Warga.destroy'); // Menghapus data user
});

//Berita
Route::group(['prefix' => 'RW/Berita'], function (){
    Route::get('/', [BeritaController::class, 'index']); // Halaman awal user
    Route::post('/list', [BeritaController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [BeritaController::class, 'create']); // Halaman form tambah user
    Route::post('/', [BeritaController::class, 'store'])->name('RW.Berita.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [BeritaController::class, 'show'])->name('RW.Berita.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('RW.Berita.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [BeritaController::class, 'update'])->name('RW.Berita.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('RW.Berita.destroy'); // Menghapus data user
});
//Agenda
Route::group(['prefix' => 'RW/Agenda'], function (){
    Route::get('/', [AgendaController::class, 'index']); // Halaman awal user
    Route::post('/list', [AgendaController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [AgendaController::class, 'create']); // Halaman form tambah user
    Route::post('/', [AgendaController::class, 'store'])->name('RW.Agenda.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [AgendaController::class, 'show'])->name('RW.Agenda.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [AgendaController::class, 'edit'])->name('RW.Agenda.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [AgendaController::class, 'update'])->name('RW.Agenda.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [AgendaController::class, 'destroy'])->name('RW.Agenda.destroy'); // Menghapus data user
});
//iuran
Route::group(['prefix' => 'RW/Iuran'], function (){
    Route::get('/', [IuranController::class, 'index']); // Halaman awal user
    Route::post('/list', [IuranController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [IuranController::class, 'create']); // Halaman form tambah user
    Route::post('/', [IuranController::class, 'store'])->name('RW.Iuran.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [IuranController::class, 'show'])->name('RW.Iuran.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [IuranController::class, 'edit'])->name('RW.Iuran.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [IuranController::class, 'update'])->name('RW.Iuran.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [IuranController::class, 'destroy'])->name('RW.Iuran.destroy'); // Menghapus data user
});
//fasilitasumum
Route::group(['prefix' => 'RW/fasilitas-umum'], function (){
    Route::get('/', [FasilitasUmumController::class, 'index']); // Halaman awal user
    Route::post('/list', [FasilitasUmumController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [FasilitasUmumController::class, 'create']); // Halaman form tambah user
    Route::post('/', [FasilitasUmumController::class, 'store'])->name('RW.fasilitas-umum.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [FasilitasUmumController::class, 'show'])->name('RW.fasilitas-umum.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [FasilitasUmumController::class, 'edit'])->name('RW.fasilitas-umum.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [FasilitasUmumController::class, 'update'])->name('RW.fasilitas-umum.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [FasilitasUmumController::class, 'destroy'])->name('RW.fasilitas-umum.destroy'); // Menghapus data user
});

//struktur
Route::group(['prefix' => 'RW/StrukturRW'], function (){
    Route::get('/', [StrukturRWController::class, 'index']); // Halaman awal user
    Route::post('/list', [StrukturRWController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [StrukturRWController::class, 'create']); // Halaman form tambah user
    Route::post('/', [StrukturRWController::class, 'store'])->name('RW.StrukturRW.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [StrukturRWController::class, 'show'])->name('RW.StrukturRW.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [StrukturRWController::class, 'edit'])->name('RW.StrukturRW.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [StrukturRWController::class, 'update'])->name('RW.StrukturRW.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [StrukturRWController::class, 'destroy'])->name('RW.StrukturRW.destroy'); // Menghapus data user
});

//pengaduan
Route::group(['prefix' => 'RW/Pengaduan'], function (){
    Route::get('/', [PengaduanController::class, 'index']); // Halaman awal user
    Route::post('/list', [PengaduanController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [PengaduanController::class, 'create']); // Halaman form tambah user
    Route::post('/', [PengaduanController::class, 'store'])->name('RW.Pengaduan.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [PengaduanController::class, 'show'])->name('RW.Pengaduan.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [PengaduanController::class, 'edit'])->name('RW.Pengaduan.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [PengaduanController::class, 'update'])->name('RW.Pengaduan.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [PengaduanController::class, 'destroy'])->name('RW.Pengaduan.destroy'); // Menghapus data user
});

//persuratan
Route::group(['prefix' => 'RW/Persuratan'], function (){
    Route::get('/', [PersuratanController::class, 'index']); // Halaman awal user
    Route::post('/list', [PersuratanController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [PersuratanController::class, 'create']); // Halaman form tambah user
    Route::post('/', [PersuratanController::class, 'store'])->name('RW.Persuratan.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [PersuratanController::class, 'show'])->name('RW.Persuratan.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [PersuratanController::class, 'edit'])->name('RW.Persuratan.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [PersuratanController::class, 'update'])->name('RW.Persuratan.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [PersuratanController::class, 'destroy'])->name('RW.Persuratan.destroy'); // Menghapus data user
});

//layanan darurat
Route::group(['prefix' => 'RW/layanan-darurat'], function (){
    Route::get('/', [LayananDaruratController::class, 'index']); // Halaman awal user
    Route::post('/list', [LayananDaruratController::class, 'list']); // Halaman data user dalam bentuk json
    Route::get('/create', [LayananDaruratController::class, 'create']); // Halaman form tambah user
    Route::post('/', [LayananDaruratController::class, 'store'])->name('RW.LayananDarurat.store'); // Menyimpan data user baru             
    Route::get('/{id}/show', [LayananDaruratController::class, 'show'])->name('RW.LayananDarurat.show'); // Menampilkan detail user
    Route::get('/{id}/edit', [LayananDaruratController::class, 'edit'])->name('RW.LayananDarurat.edit'); // Menampilkan halaman form edit user
    Route::put('/{id}', [LayananDaruratController::class, 'update'])->name('RW.LayananDarurat.update'); // Menampilkan perubahan data user
    Route::delete('/{id}', [LayananDaruratController::class, 'destroy'])->name('RW.LayananDarurat.destroy'); // Menghapus data user
});



Route::get('/forgotpassword', function () {
    return view('auth.LupaPass');
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

