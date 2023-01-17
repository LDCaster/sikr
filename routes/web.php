<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DireksiPekerjaanController;
use App\Http\Controllers\HargaSatuanController;
use App\Http\Controllers\HargaTransportAsuransiController;
use App\Http\Controllers\JenisMaterialController;
use App\Http\Controllers\JenisVariantController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PabrikanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\PrkController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\RnkController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TambahRabController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authentication'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'registerProses'])->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Admin - Dashboard"
    ]);
});

// Route::get('wizard', function () {
//     return view('default');
// });

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('akun-saya', AkunController::class);
Route::resource('kontrak', KontrakController::class);
Route::resource('pabrikan', PabrikanController::class);
Route::resource('jenis-variant', JenisVariantController::class);
Route::resource('variant', VariantController::class);
Route::resource('jenis-material', JenisMaterialController::class);
Route::resource('material', MaterialController::class);
Route::resource('harga-transport', HargaTransportAsuransiController::class);
Route::resource('harga-satuan', HargaSatuanController::class);
Route::resource('pengadaan', PengadaanController::class);
Route::resource('direksi-pekerjaan', DireksiPekerjaanController::class);
Route::resource('satuan', SatuanController::class);
Route::resource('prk', PrkController::class);
Route::resource('rincian-nilai-kontrak', RnkController::class);
Route::resource('rencana-anggaran-biaya', RabController::class);
Route::resource('tambah-rab', TambahRabController::class);




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'authentication'])->middleware('guest');
// Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
// Route::post('/register', [AuthController::class, 'registerProses'])->middleware('guest');

// Route::get('/dashboard', function () {
//     return view('dashboard', [
//         "title" => "Admin - Dashboard"
//     ]);
// })->middleware('auth');

// // Route::get('wizard', function () {
// //     return view('default');
// // });

// Route::resource('user', UserController::class)->middleware('auth');
// Route::resource('role', RoleController::class)->middleware('auth');
// Route::resource('kontrak', KontrakController::class)->middleware('auth');
// Route::resource('pabrikan', PabrikanController::class)->middleware('auth');
// Route::resource('jenis-variant', JenisVariantController::class)->middleware('auth');
// Route::resource('variant', VariantController::class)->middleware('auth');
// Route::resource('jenis-material', JenisMaterialController::class);
// Route::resource('material', MaterialController::class)->middleware('auth');
// Route::resource('harga-transport', HargaTransportAsuransiController::class)->middleware('auth');
// Route::resource('harga-satuan', HargaSatuanController::class)->middleware('auth');
// Route::resource('pengadaan', PengadaanController::class)->middleware('auth');
// Route::resource('direksi-pekerjaan', DireksiPekerjaanController::class)->middleware('auth');
// Route::resource('satuan', SatuanController::class)->middleware('auth');
// Route::resource('prk', PrkController::class)->middleware('auth');
// Route::resource('rincian-nilai-kontrak', RnkController::class)->middleware('auth');
// Route::resource('rencana-anggaran-biaya', RabController::class)->middleware('auth');
// Route::resource('tambah-rab', TambahRabController::class)->middleware('auth');
