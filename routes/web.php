<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Menghubungkan alamat URL ke method di HalamanController.
*/

// Route 1: Halaman utama (Landing Page / Digital Business Card)
Route::get('/', [HalamanController::class, 'satu'])->name('halaman.satu');

// Route 2: Halaman detail proyek dan form kontak
Route::get('/detail', [HalamanController::class, 'dua'])->name('halaman.dua');