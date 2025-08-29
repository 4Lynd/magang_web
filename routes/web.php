<?php

use Illuminate\Support\Facades\Route;

// Halaman utama diarahkan ke login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman welcome
Route::get('/login', function () {
    return view('login');
})->name('login');

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
