<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TugasFungsiController;

// Landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Dashboard home
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Form demo
Route::get('/form', function () {
    return view('form');
})->name('form');

// CRUD Buku
Route::prefix('dashboard/buku')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('buku.index');
    Route::post('/', [BookController::class, 'store'])->name('buku.store');
    Route::get('/create', [BookController::class, 'create'])->name('buku.create');
});

// Visi Misi
Route::get('/dashboard/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
Route::put('/dashboard/visimisi', [VisiMisiController::class, 'update'])->name('visimisi.update');

// Tugas Fungsi
Route::get('/dashboard/tugasfungsi', [TugasFungsiController::class, 'index'])->name('tugasfungsi.index');
Route::put('/dashboard/tugasfungsi', [TugasFungsiController::class, 'update'])->name('tugasfungsi.update');
