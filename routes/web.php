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
