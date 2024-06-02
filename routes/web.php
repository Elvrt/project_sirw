<?php

use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LayananDaruratController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\FasilitasUmumController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\StrukturRWController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PersuratanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PersuratanDashboardController;
use App\Http\Controllers\IuranDashboardController;
use App\Http\Controllers\FasumDashboardController;
use App\Http\Controllers\PengaduanDashboardController;
use App\Http\Controllers\LayananDaruratDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthRWController;
use App\Http\Controllers\AuthRtController;
use App\Http\Controllers\RedirectController;
use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\KartuKeluargaRTController;
use App\Http\Controllers\WargaRTController;
use App\Http\Controllers\PersuratanRTController;
use App\Http\Controllers\IuranRTController;
use App\Http\Controllers\BeritaRTController;
use App\Http\Controllers\AgendaRTController;
use App\Http\Controllers\FasilitasUmumRTController;
use App\Http\Controllers\CriteriaWeightsController;
use App\Http\Controllers\CriteriaRatingsController;
use App\Http\Controllers\AlternativesController;
<<<<<<< Updated upstream
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\RankController;
=======
use App\Http\Controllers\BansosRTController;
>>>>>>> Stashed changes

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

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);

});

// untuk RW, rt, Warga
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8,9']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk RW
Route::group(['middleware' => ['auth', 'checkrole:9'], 'prefix' => 'RW'], function() {
    Route::get('/', [AuthRWController::class, 'index']);

    // Bansos
    Route::group(['prefix' => 'criteriaweights'], function (){
        Route::get('/', [CriteriaWeightsController::class, 'index'])->name('RW.criteriaweights.index');
        Route::post('/index', [CriteriaWeightsController::class, 'index']);
        Route::get('/create', [CriteriaWeightsController::class, 'create'])->name('RW.criteriaweights.create');
        Route::post('/', [CriteriaWeightsController::class, 'store'])->name('RW.criteriaweights.store');
        Route::get('/{criteriaweight}/edit', [CriteriaWeightsController::class, 'edit'])->name('RW.criteriaweights.edit');
        Route::put('/{criteriaweight}', [CriteriaWeightsController::class, 'update'])->name('RW.criteriaweights.update');
        Route::delete('/{criteriaweight}', [CriteriaWeightsController::class, 'destroy'])->name('RW.criteriaweights.destroy');
    });
    Route::group(['prefix' => 'criteriaratings'], function (){
        Route::get('/', [CriteriaRatingsController::class, 'index'])->name('RW.criteriaratings.index');
        Route::post('/index', [CriteriaRatingsController::class, 'index']);
        Route::get('/create', [CriteriaRatingsController::class, 'create'])->name('RW.criteriaratings.create');
        Route::post('/', [CriteriaRatingsController::class, 'store'])->name('RW.criteriaratings.store');
        Route::get('/{criteriarating}/edit', [CriteriaRatingsController::class, 'edit'])->name('RW.criteriaratings.edit');
        Route::put('/{criteriarating}', [CriteriaRatingsController::class, 'update'])->name('RW.criteriaratings.update');
        Route::delete('/{criteriarating}', [CriteriaRatingsController::class, 'destroy'])->name('RW.criteriaratings.destroy');
    });
    Route::group(['prefix' => 'alternatives'], function (){
        Route::get('/', [AlternativesController::class, 'index'])->name('RW.alternatives.index');
        Route::post('/index', [AlternativesController::class, 'index']);
        Route::get('/create', [AlternativesController::class, 'create'])->name('RW.alternatives.create');
        Route::post('/', [AlternativesController::class, 'store'])->name('RW.alternatives.store');
        Route::get('/{alternative}/edit', [AlternativesController::class, 'edit'])->name('RW.alternatives.edit');
        Route::put('/{alternative}', [AlternativesController::class, 'update'])->name('RW.alternatives.update');
        Route::delete('/{alternative}', [AlternativesController::class, 'destroy'])->name('RW.alternatives.destroy');
    });
    Route::get('/decision', [DecisionController::class, 'index'])->name('RW.decision.index');
    Route::get('/normalization', [NormalizationController::class, 'index'])->name('RW.normalization.index');
    Route::get('/rank', [RankController::class, 'index'])->name('RW.rank.index');

    // Kartu Keluarga
    Route::group(['prefix' => 'KartuKeluarga'], function (){
        Route::get('/', [KartuKeluargaController::class, 'index']); // Halaman awal user
        Route::post('/index', [KartuKeluargaController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [KartuKeluargaController::class, 'create']); // Halaman form tambah user
        Route::post('/', [KartuKeluargaController::class, 'store'])->name('RW.KartuKeluarga.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [KartuKeluargaController::class, 'show'])->name('RW.KartuKeluarga.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [KartuKeluargaController::class, 'edit'])->name('RW.KartuKeluarga.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [KartuKeluargaController::class, 'update'])->name('RW.KartuKeluarga.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [KartuKeluargaController::class, 'destroy'])->name('RW.KartuKeluarga.destroy'); // Menghapus data user
    });

    // Warga
    Route::group(['prefix' => 'Warga'], function (){
        Route::get('/', [WargaController::class, 'index']); // Halaman awal user
        Route::post('/index', [WargaController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [WargaController::class, 'create']); // Halaman form tambah user
        Route::post('/', [WargaController::class, 'store'])->name('RW.Warga.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [WargaController::class, 'show'])->name('RW.Warga.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [WargaController::class, 'edit'])->name('RW.Warga.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [WargaController::class, 'update'])->name('RW.Warga.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [WargaController::class, 'destroy'])->name('RW.Warga.destroy'); // Menghapus data user
    });

    // User
    Route::group(['prefix' => 'User'], function (){
        Route::get('/', [UserController::class, 'index']); // Halaman awal user
        Route::post('/index', [UserController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [UserController::class, 'create']); // Halaman form tambah user
        Route::post('/', [UserController::class, 'store'])->name('RW.User.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [UserController::class, 'show'])->name('RW.User.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('RW.User.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [UserController::class, 'update'])->name('RW.User.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('RW.User.destroy'); // Menghapus data user
    });

    // Iuran
    Route::group(['prefix' => 'Iuran'], function (){
        Route::get('/', [IuranController::class, 'index']); // Halaman awal user
        Route::post('/index', [IuranController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [IuranController::class, 'create']); // Halaman form tambah user
        Route::post('/', [IuranController::class, 'store'])->name('RW.Iuran.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [IuranController::class, 'show'])->name('RW.Iuran.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [IuranController::class, 'edit'])->name('RW.Iuran.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [IuranController::class, 'update'])->name('RW.Iuran.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [IuranController::class, 'destroy'])->name('RW.Iuran.destroy'); // Menghapus data user
    });

    // Persuratan
    Route::group(['prefix' => 'Persuratan'], function (){
        Route::get('/', [PersuratanController::class, 'index']); // Halaman awal user
        Route::post('/index', [PersuratanController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [PersuratanController::class, 'create']); // Halaman form tambah user
        Route::post('/', [PersuratanController::class, 'store'])->name('RW.Persuratan.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [PersuratanController::class, 'show'])->name('RW.Persuratan.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [PersuratanController::class, 'edit'])->name('RW.Persuratan.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [PersuratanController::class, 'update'])->name('RW.Persuratan.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [PersuratanController::class, 'destroy'])->name('RW.Persuratan.destroy'); // Menghapus data user
    });

    // Pengaduan
    Route::group(['prefix' => 'Pengaduan'], function (){
        Route::get('/', [PengaduanController::class, 'index']); // Halaman awal user
        Route::post('/index', [PengaduanController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [PengaduanController::class, 'create']); // Halaman form tambah user
        Route::post('/', [PengaduanController::class, 'store'])->name('RW.Pengaduan.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [PengaduanController::class, 'show'])->name('RW.Pengaduan.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [PengaduanController::class, 'edit'])->name('RW.Pengaduan.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [PengaduanController::class, 'update'])->name('RW.Pengaduan.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [PengaduanController::class, 'destroy'])->name('RW.Pengaduan.destroy'); // Menghapus data user
    });

    // Agenda
    Route::group(['prefix' => 'Agenda'], function (){
        Route::get('/', [AgendaController::class, 'index']); // Halaman awal user
        Route::post('/index', [AgendaController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [AgendaController::class, 'create']); // Halaman form tambah user
        Route::post('/', [AgendaController::class, 'store'])->name('RW.Agenda.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [AgendaController::class, 'show'])->name('RW.Agenda.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [AgendaController::class, 'edit'])->name('RW.Agenda.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [AgendaController::class, 'update'])->name('RW.Agenda.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [AgendaController::class, 'destroy'])->name('RW.Agenda.destroy'); // Menghapus data user
    });

    // Berita
    Route::group(['prefix' => 'Berita'], function (){
        Route::get('/', [BeritaController::class, 'index']); // Halaman awal user
        Route::post('/index', [BeritaController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [BeritaController::class, 'create']); // Halaman form tambah user
        Route::post('/', [BeritaController::class, 'store'])->name('RW.Berita.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [BeritaController::class, 'show'])->name('RW.Berita.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('RW.Berita.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [BeritaController::class, 'update'])->name('RW.Berita.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('RW.Berita.destroy'); // Menghapus data user
    });

    // Fasilitas Umum
    Route::group(['prefix' => 'FasilitasUmum'], function (){
        Route::get('/', [FasilitasUmumController::class, 'index']); // Halaman awal user
        Route::post('/index', [FasilitasUmumController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [FasilitasUmumController::class, 'create']); // Halaman form tambah user
        Route::post('/', [FasilitasUmumController::class, 'store'])->name('RW.FasilitasUmum.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [FasilitasUmumController::class, 'show'])->name('RW.FasilitasUmum.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [FasilitasUmumController::class, 'edit'])->name('RW.FasilitasUmum.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [FasilitasUmumController::class, 'update'])->name('RW.FasilitasUmum.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [FasilitasUmumController::class, 'destroy'])->name('RW.FasilitasUmum.destroy'); // Menghapus data user
    });

    // Layanan Darurat
    Route::group(['prefix' => 'LayananDarurat'], function (){
        Route::get('/', [LayananDaruratController::class, 'index']); // Halaman awal user
        Route::post('/index', [LayananDaruratController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [LayananDaruratController::class, 'create']); // Halaman form tambah user
        Route::post('/', [LayananDaruratController::class, 'store'])->name('RW.LayananDarurat.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [LayananDaruratController::class, 'show'])->name('RW.LayananDarurat.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [LayananDaruratController::class, 'edit'])->name('RW.LayananDarurat.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [LayananDaruratController::class, 'update'])->name('RW.LayananDarurat.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [LayananDaruratController::class, 'destroy'])->name('RW.LayananDarurat.destroy'); // Menghapus data user
    });

    // Struktur Rw
    Route::group(['prefix' => 'StrukturRw'], function (){
        Route::get('/', [StrukturRWController::class, 'index']); // Halaman awal user
        Route::post('/index', [StrukturRWController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [StrukturRWController::class, 'create']); // Halaman form tambah user
        Route::post('/', [StrukturRWController::class, 'store'])->name('RW.StrukturRw.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [StrukturRWController::class, 'show'])->name('RW.StrukturRw.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [StrukturRWController::class, 'edit'])->name('RW.StrukturRw.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [StrukturRWController::class, 'update'])->name('RW.StrukturRw.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [StrukturRWController::class, 'destroy'])->name('RW.StrukturRw.destroy'); // Menghapus data user
    });

    // Tata Tertib
    Route::group(['prefix' => 'TataTertib'], function (){
        Route::get('/', [TataTertibController::class, 'index']); // Halaman awal user
        Route::post('/index', [TataTertibController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [TataTertibController::class, 'create']); // Halaman form tambah user
        Route::post('/', [TataTertibController::class, 'store'])->name('RW.TataTertib.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [TataTertibController::class, 'show'])->name('RW.TataTertib.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [TataTertibController::class, 'edit'])->name('RW.TataTertib.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [TataTertibController::class, 'update'])->name('RW.TataTertib.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [TataTertibController::class, 'destroy'])->name('RW.TataTertib.destroy'); // Menghapus data user
    });
});

// untuk rt
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8'], 'prefix' => 'RT'], function() {
    Route::get('/', [AuthRtController::class, 'index']);


    Route::group(['prefix' => 'KartuKeluarga'], function (){
        Route::get('/', [KartuKeluargaRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [KartuKeluargaRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [KartuKeluargaRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [KartuKeluargaRTController::class, 'store'])->name('RT.KartuKeluarga.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [KartuKeluargaRTController::class, 'show'])->name('RT.KartuKeluarga.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [KartuKeluargaRTController::class, 'edit'])->name('RT.KartuKeluarga.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [KartuKeluargaRTController::class, 'update'])->name('RT.KartuKeluarga.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [KartuKeluargaRTController::class, 'destroy'])->name('RT.KartuKeluarga.destroy'); // Menghapus data user
    });

    // Warga
    Route::group(['prefix' => 'Warga'], function (){
        Route::get('/', [WargaRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [WargaRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [WargaRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [WargaRTController::class, 'store'])->name('RT.Warga.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [WargaRTController::class, 'show'])->name('RT.Warga.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [WargaRTController::class, 'edit'])->name('RT.Warga.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [WargaRTController::class, 'update'])->name('RT.Warga.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [WargaRTController::class, 'destroy'])->name('RT.Warga.destroy'); // Menghapus data user
    });

    // Iuran
    Route::group(['prefix' => 'Iuran'], function (){
        Route::get('/', [IuranRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [IuranRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [IuranRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [IuranRTController::class, 'store'])->name('RT.Iuran.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [IuranRTController::class, 'show'])->name('RT.Iuran.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [IuranRTController::class, 'edit'])->name('RT.Iuran.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [IuranRTController::class, 'update'])->name('RT.Iuran.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [IuranRTController::class, 'destroy'])->name('RT.Iuran.destroy'); // Menghapus data user
    });

    // Persuratan
    Route::group(['prefix' => 'Persuratan'], function (){
        Route::get('/', [PersuratanRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [PersuratanRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [PersuratanRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [PersuratanRTController::class, 'store'])->name('RT.Persuratan.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [PersuratanRTController::class, 'show'])->name('RT.Persuratan.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [PersuratanRTController::class, 'edit'])->name('RT.Persuratan.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [PersuratanRTController::class, 'update'])->name('RT.Persuratan.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [PersuratanRTController::class, 'destroy'])->name('RT.Persuratan.destroy'); // Menghapus data user
    });

    // Agenda
    Route::group(['prefix' => 'Agenda'], function (){
        Route::get('/', [AgendaRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [AgendaRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [AgendaRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [AgendaRTController::class, 'store'])->name('RT.Agenda.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [AgendaRTController::class, 'show'])->name('RT.Agenda.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [AgendaRTController::class, 'edit'])->name('RT.Agenda.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [AgendaRTController::class, 'update'])->name('RT.Agenda.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [AgendaRTController::class, 'destroy'])->name('RT.Agenda.destroy'); // Menghapus data user
    });

    // Berita
    Route::group(['prefix' => 'Berita'], function (){
        Route::get('/', [BeritaRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [BeritaRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [BeritaRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [BeritaRTController::class, 'store'])->name('RT.Berita.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [BeritaRTController::class, 'show'])->name('RT.Berita.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [BeritaRTController::class, 'edit'])->name('RT.Berita.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [BeritaRTController::class, 'update'])->name('RT.Berita.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [BeritaRTController::class, 'destroy'])->name('RT.Berita.destroy'); // Menghapus data user
    });

    // Fasilitas Umum
    Route::group(['prefix' => 'FasilitasUmum'], function (){
        Route::get('/', [FasilitasUmumRTController::class, 'index']); // Halaman awal user
        Route::post('/index', [FasilitasUmumRTController::class, 'index']); // Halaman data user dalam bentuk json
        Route::get('/create', [FasilitasUmumRTController::class, 'create']); // Halaman form tambah user
        Route::post('/', [FasilitasUmumRTController::class, 'store'])->name('RT.FasilitasUmum.store'); // Menyimpan data user baru
        Route::get('/{id}/show', [FasilitasUmumRTController::class, 'show'])->name('RT.FasilitasUmum.show'); // Menampilkan detail user
        Route::get('/{id}/edit', [FasilitasUmumRTController::class, 'edit'])->name('RT.FasilitasUmum.edit'); // Menampilkan halaman form edit user
        Route::put('/{id}', [FasilitasUmumRTController::class, 'update'])->name('RT.FasilitasUmum.update'); // Menampilkan perubahan data user
        Route::delete('/{id}', [FasilitasUmumRTController::class, 'destroy'])->name('RT.FasilitasUmum.destroy'); // Menghapus data user
    });

});

Route::get('/forgotpassword', function () {
    return view('auth.LupaPass');
});

Route::group(['prefix' => ''], function (){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::get('/info', [InfoController::class, 'index']);
    Route::get('/layanan', [LayananController::class, 'index']);
    Route::get('/agenda/{id}', [InfoController::class, 'showAgenda']);
    Route::get('/berita/{id}', [InfoController::class, 'showBerita']);
    // fasilitas umum
    Route::get('/fasum', [FasumDashboardController::class, 'index']);
    Route::get('/fasilitasumum/{id}', [FasumDashboardController::class, 'show']);
    // iuran
    Route::get('/statusiuran', [IuranDashboardController::class, 'indexStatus']);
    // persuratan
    Route::get('/pengajuansurat', [PersuratanDashboardController::class, 'index']);
    Route::get('/requestsurat', [PersuratanDashboardController::class, 'create']);
    Route::post('/requestsurat', [PersuratanDashboardController::class, 'store']);
    Route::get('/statussurat', [PersuratanDashboardController::class, 'indexStatus']);
    // pengaduan
    Route::get('/pengaduan', [PengaduanDashboardController::class, 'index']);
    Route::get('/laporpengaduan', [PengaduanDashboardController::class, 'create']);
    Route::post('/laporpengaduan', [PengaduanDashboardController::class, 'store']);
    Route::get('/statuspengaduan', [PengaduanDashboardController::class, 'indexStatus']);
    // layanan darurat
    Route::get('/layanandarurat', [LayananDaruratDashboardController::class, 'index']);
<<<<<<< Updated upstream
=======
    // Bansos
    Route::get('/pengajuanbansos', [BansosDashboardController::class, 'index']);
    Route::get('/pengajuanbansos/create', [BansosController::class, 'create']);
    Route::post('/pengajuanbansoss', [BansosController::class, 'store'])->name('bansos.store');
    Route::get('/statusbansos', [BansosController::class, 'status']);
    Route::get('/RT/Bansos', [BansosRTController::class, 'index']);
>>>>>>> Stashed changes
});
 