<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardmobile', function () {
    return view('mobileapp.dasboard-mobile');
});

// Route::get('/loginmobile', function () {
//     return view('mobileapp.loginmobile'); // Halaman login
// })->name('login');

// Route::post('/loginmobile', [AuthController::class, 'login'])->name('login.post'); // Menggunakan POST untuk login

// Route::get('/dashboardmobile', function () {
//     return view('mobileapp.dasboard-mobile'); // Halaman dashboard
// })->name('dashboard')->middleware('auth');


Route::get('/loginmobile', function () {
    return view('mobileapp.loginmobile');
});

Route::get('/daftarmobile', function () {
    return view('mobileapp.daftarmobile');
});

Route::get('/lupakatasandi', function () {
    return view('mobileapp.lupakatasandi');
});

Route::get('/verifikasi', function () {
    return view('mobileapp.verifikasi');
});

Route::get('/aturulangkatasandi', function () {
    return view('mobileapp.aturulangkatasandi');
});

Route::get('/pesanan', function () {
    return view('mobileapp.pesanan');
});

Route::get('/formpesanan', function () {
    return view('mobileapp.formpesanan');
});

Route::get('/jadwalpesanan', function () {
    return view('mobileapp.jadwalpesanan');
});

Route::get('/pembayaranewallet', function () {
    return view('mobileapp.pembayaranewallet');
});

Route::get('/pesanansaya', function () {
    return view('mobileapp.pesanansaya');
});

Route::get('/profilsaya', function () {
    return view('mobileapp.profil');
});
