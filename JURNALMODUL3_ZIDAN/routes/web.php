<?php

use Illuminate\Support\Facades\Route;
# 1. Import controller yang akan digunakan
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\profilcontroller;

# 2. Tambahkan route untuk halaman dashboard dengan metode GET yang memanggil fungsi index() dari DashboardController.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

# 3. Tambahkan route untuk halaman profil dengan metode GET yang memanggil fungsi index() dari ProfileController.
Route::get('/profil', [profilController::class, 'index'])->name('profil');
