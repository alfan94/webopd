<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
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

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [App\Http\Controllers\PegawaiController::class, 'store'])->name('pegawai.store');
Route::delete('/pegawai/{id}', [App\Http\Controllers\PegawaiController::class,'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/{id}/edit', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/{id}/update', [App\Http\Controllers\PegawaiController::class, 'update'])->name('pegawai.update');

Route::get('/inovasi', [App\Http\Controllers\InovasiController::class, 'index'])->name('inovasi.index');
Route::get('/inovasi/create', [App\Http\Controllers\InovasiController::class, 'create'])->name('inovasi.create');
Route::post('/inovasi/store', [App\Http\Controllers\InovasiController::class, 'store'])->name('inovasi.store');
Route::delete('/inovasi/{id}', [App\Http\Controllers\InovasiController::class,'destroy'])->name('inovasi.destroy');
Route::get('/inovasi/{id}/edit', [App\Http\Controllers\InovasiController::class, 'edit'])->name('inovasi.edit');
Route::post('/inovasi/{id}/update', [App\Http\Controllers\InovasiController::class, 'update'])->name('inovasi.update');

ROute::get('/',[LandingController::class,'index'])->name('landing');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
