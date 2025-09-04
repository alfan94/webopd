<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FotoDashboardController;
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
route::get('testing',function(){
    return view('layout.template');
});

Route::get('/dsfdf', function () {
    return view('welcome');
});

//berita
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::delete('/berita/{id}', [App\Http\Controllers\BeritaController::class,'destroy'])->name('berita.destroy');
Route::get('/berita/{id}/edit', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
Route::post('/berita/{id}/update', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');

//poli
Route::get('/poli', [App\Http\Controllers\PoliController::class, 'index'])->name('poli.index');
Route::get('/poli/create', [App\Http\Controllers\PoliController::class, 'create'])->name('poli.create');
Route::post('/poli/store', [App\Http\Controllers\PoliController::class, 'store'])->name('poli.store');
Route::delete('/poli/{id}', [App\Http\Controllers\PoliController::class,'destroy'])->name('poli.destroy');

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [App\Http\Controllers\PegawaiController::class, 'store'])->name('pegawai.store');
Route::delete('/pegawai/{id}', [App\Http\Controllers\PegawaiController::class,'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/edit', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('posts.edit');

//dokter
Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index'])->name('dokter.index');
Route::get('/dokter/create', [App\Http\Controllers\DokterController::class, 'create'])->name('dokter.create');
Route::post('/dokter/store', [App\Http\Controllers\DokterController::class, 'store'])->name('dokter.store');
Route::delete('/dokter/{id}', [App\Http\Controllers\DokterController::class,'destroy'])->name('dokter.destroy');
Route::get('/dokter/{id}/edit', [App\Http\Controllers\DokterController::class, 'edit'])->name('dokter.edit');
Route::post('/dokter/{id}/update', [App\Http\Controllers\DokterController::class, 'update'])->name('dokter.update');
Route::post('/jadwal-dokter', [App\Http\Controllers\JadwalDokterController::class, 'store'])->name('jadwal.store');
Route::get('/jadwal-dokter/{id}', [App\Http\Controllers\JadwalDokterController::class, 'getJadwal'])->name('jadwal.get');



ROute::get('/',[LandingController::class,'index'])->name('landing');



//foto slider
Route::get('admin/slider',[FotoDashboardController::class,'index'])->name('landing');
Route::post('admin/slider/tambah',[FotoDashboardController::class,'create'])->name('landing');
Route::put('admin/slider/update/{id}',[FotoDashboardController::class,'update'])->name('landing');
Route::delete('admin/slider/hapus/{id}',[FotoDashboardController::class,'hapus'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
