<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TugasFungsiController;
use App\Http\Controllers\AuthenticationController;

// Landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Authentication routes
Route::middleware(['guest.only'])->group(function () {
    Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthenticationController::class, 'login']);
    // Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthenticationController::class, 'register']);
});

// Rute yang memerlukan otentikasi
Route::middleware(['auth.check'])->group(function () {
    // Dashboard home
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Buku
    Route::prefix('dashboard/buku')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('buku.index');
        Route::post('/', [BookController::class, 'store'])->name('buku.store');
        Route::get('/create', [BookController::class, 'create'])->name('buku.create');
        Route::delete('/{id}', [BookController::class, 'destroy'])->name('buku.destroy');
    });

    // Visi Misi
    Route::get('/dashboard/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
    Route::put('/dashboard/visimisi', [VisiMisiController::class, 'update'])->name('visimisi.update');

    // Tugas Fungsi
    Route::get('/dashboard/tugasfungsi', [TugasFungsiController::class, 'index'])->name('tugasfungsi.index');
    Route::put('/dashboard/tugasfungsi', [TugasFungsiController::class, 'update'])->name('tugasfungsi.update');

    // Struktur
    Route::get('/dashboard/struktur', [StrukturController::class, 'index'])->name('struktur.index');
    Route::get('/dashboard/struktur/{id}', [StrukturController::class, 'edit'])->name('struktur.edit');
    Route::delete('/dashboard/struktur/{id}', [StrukturController::class, 'destroy'])->name('struktur.destroy');
    Route::post('/dashboard/struktur', [StrukturController::class, 'store'])->name('struktur.store');
    Route::put('/dashboard/struktur/{struktur}', [StrukturController::class, 'update'])->name('struktur.update');

    // Ganti Password
    Route::get('/dashboard/ganti-password', [AuthenticationController::class, 'showChangePassword'])->name('password.edit');
    Route::put('/dashboard/ganti-password', [AuthenticationController::class, 'updatePassword'])->name('password.update');

    // Logout
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});
