<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemeriksaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use Illuminate\Support\Facades\Route;

// Landing Page

Route::get('/', function () {
    return view('landing_page');
});

// Auth

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Dokter

Route::get('/dokter/dashboard', function () {
    return view('dokter.index');
})->name('dokter.dashboard')->middleware('role:dokter', 'auth');

Route::get('/dokter/memeriksa', [MemeriksaController::class, 'index'])->middleware('role:dokter', 'auth');
Route::get('/dokter/memeriksa/{id}/create', [MemeriksaController::class, 'create'])->middleware('role:dokter', 'auth');
Route::post('/dokter/memeriksa', [MemeriksaController::class, 'store'])->middleware('role:dokter', 'auth');
Route::get('/dokter/memeriksa/{id}/edit', [MemeriksaController::class, 'edit'])->middleware('role:dokter', 'auth');
Route::put('/dokter/memeriksa/{id}', [MemeriksaController::class, 'update'])->middleware('role:dokter', 'auth');

Route::get('/dokter/obat', [ObatController::class, 'index'])->middleware('role:dokter', 'auth');
Route::get('/dokter/obat/create', [ObatController::class, 'create'])->middleware('role:dokter', 'auth');
Route::post('/dokter/obat', [ObatController::class, 'store'])->middleware('role:dokter', 'auth');
Route::get('/dokter/obat/{id}/edit', [ObatController::class, 'edit'])->middleware('role:dokter', 'auth');
Route::put('/dokter/obat/{id}', [ObatController::class, 'update'])->middleware('role:dokter', 'auth');
Route::delete('/dokter/obat/{id}', [ObatController::class, 'destroy'])->middleware('role:dokter', 'auth');

// Pasien

Route::get('/pasien/dashboard', function () {
    return view('pasien.index');
})->name('pasien.dashboard')->middleware('role:pasien', 'auth');

Route::get('/pasien/periksa', [PeriksaController::class, 'index'])->middleware('role:pasien', 'auth');
Route::post('/pasien/periksa', [PeriksaController::class, 'store'])->middleware('role:pasien', 'auth');
