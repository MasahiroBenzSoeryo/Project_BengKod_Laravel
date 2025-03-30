<?php

use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.landing_page');
});
Route::get('/login', function () {
    return view('layout.login');
});
Route::get('/register', function () {
    return view('layout.register');
});
Route::get('/dokter/dashboard', function () {
    return view('dokter.index');
});
/* Route::get('/dokter/obat', function () {
     return view('dokter.obat');
 }); */
Route::get('/dokter/obat', [ObatController::class, 'index']);
Route::get('/dokter/memeriksa', function () {
    return view('dokter.memeriksa');
});
Route::get('/pasien/dashboard', function () {
    return view('pasien.index');
});
Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
});