<?php

use Illuminate\Support\Facades\Route;

// Halaman utama diarahkan ke welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Halaman register (tambahkan biar tidak error)
Route::get('/register', function () {
    return view('register');
})->name('register');

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/pengguna', function () {
    return view('admin.pengguna.index'); 
})->name('pengguna.index');

Route::get('/divisi', function () {
    return view('admin.divisi.index'); 
})->name('divisi.index');

Route::get('/konfirmasipj', function () {
    return view('admin.konfirmasi_pengajuan.index'); 
})->name('konfirmasi_pengajuan.index');

Route::get('/aktivasi', function () {
    return view('admin.aktivasi.index'); 
})->name('aktivasi.index');
