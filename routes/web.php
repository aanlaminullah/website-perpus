<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});


//CRUD Report
Route::prefix('dashboard/buku')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('buku.index');
    Route::post('/', [BookController::class, 'store'])->name('buku.store');
    Route::get('/create', [BookController::class, 'create'])->name('buku.create');
});
