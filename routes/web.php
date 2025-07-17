<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NilaiMahasiswaController;

// Halaman utama, langsung redirect ke daftar mahasiswa
Route::get('/', function () {
    return redirect()->route('mahasiswa.index');  // Redirect ke daftar mahasiswa
});

// Route Resource untuk CRUD mahasiswa, mata kuliah, dan nilai mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MataKuliahController::class);
Route::resource('nilaimahasiswa', NilaiMahasiswaController::class);

// Menambahkan route untuk transkrip
Route::get('transkrip/{id}', [NilaiMahasiswaController::class, 'transkrip'])->name('transkrip');
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
