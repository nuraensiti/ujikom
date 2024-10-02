<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\webgaleriController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\webfotoController;


Route::get("", function () {
    $galeri = app(webgaleriController::class)->index();
    $foto = app(webfotoController::class)->index();

    return view('welcome', ['galeri' => $galeri,'foto' => $foto]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);


Route::middleware('auth')->group(function () {
    // Change the view to 'galeri' instead of 'dashboard'
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::post('galeri/tambah', [GaleriController::class, 'tambah']);
    Route::post('galeri/hapus', [GaleriController::class, 'hapus']);
    Route::post('galeri/edit', [GaleriController::class, 'edit']);
});
Route::middleware('auth')->group(function () {
Route::get('/foto', [FotoController::class, 'index'])->name('foto.index');
Route::post('/foto/tambah', [FotoController::class, 'tambah'])->name('foto.tambah');
Route::post('/foto/edit', [FotoController::class, 'edit'])->name('foto.edit');
Route::post('/foto/hapus', [FotoController::class, 'hapus'])->name('foto.hapus');
});