<?php

use App\Http\Controllers\DireksiPekerjaanController;
use App\Http\Controllers\JenisMaterialController;
use App\Http\Controllers\JenisVariantController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PabrikanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\PrkController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\RnkController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TambahRabController;
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

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Admin - Dashboard"
    ]);
});

Route::get('wizard', function () {
    return view('default');
});

Route::resource('kontrak', KontrakController::class);
Route::resource('pabrikan', PabrikanController::class);
Route::resource('jenis-variant', JenisVariantController::class);
Route::resource('variant', VariantController::class);
Route::resource('pengadaan', PengadaanController::class);
Route::resource('direksi-pekerjaan', DireksiPekerjaanController::class);
Route::resource('jenis-material', JenisMaterialController::class);
Route::resource('material', MaterialController::class);
Route::resource('satuan', SatuanController::class);
Route::resource('prk', PrkController::class);
Route::resource('rincian-nilai-kontrak', RnkController::class);
Route::resource('rencana-anggaran-biaya', RabController::class);
Route::resource('tambah-rab', TambahRabController::class);
