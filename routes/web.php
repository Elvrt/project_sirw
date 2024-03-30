<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/forgotpassword', function () {
    return view('login.LupaPass');
});

Route::get('/dashboard', function () {
    return view('warga.dashboard');
});

Route::get('/profil', function () {
    return view('warga.ProfilRW');
});

Route::get('/info', function () {
    return view('warga.info');
});

Route::get('/layanan', function () {
    return view('warga.layanan');
});