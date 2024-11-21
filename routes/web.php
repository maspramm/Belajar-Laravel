<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk dashboard (hanya untuk pengguna yang sudah terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role-admin'])->name('dashboard');

// Rute untuk fitur profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk fitur posts (CRUD Mahasiswa)
Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/posts-pdf', [PostController::class, 'generatePDF'])->name('posts.pdf');
});

// Menggunakan rute autentikasi bawaan dari Laravel Breeze
require __DIR__.'/auth.php';
