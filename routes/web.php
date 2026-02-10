<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasConstroller;
use App\Http\Controllers\SiswaConstroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelas', [KelasConstroller::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasConstroller::class, 'create'])->name('kelas.create');
Route::post('/kelas/store', [KelasConstroller::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasConstroller::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasConstroller::class, 'update'])->name('kelas.update');
Route::get('/kelas/{id}', [KelasConstroller::class, 'destroy'])->name('kelas.destroy');
//akhir route kelas 

//awal route siswa
Route::get('/siswa', [SiswaConstroller::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaConstroller::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaConstroller::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [SiswaConstroller::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaConstroller::class, 'update'])->name('siswa.update');
Route::get('/siswa/{id}', [SiswaConstroller::class, 'destroy'])->name('siswa.destroy');