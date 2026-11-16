<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfilController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [ProfilController::class, 'tentang'])->name('tentang');
Route::get('/galeri', [ProfilController::class, 'galeri'])->name('galeri');
