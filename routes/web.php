<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('auth.daftar');
});

Route::post('/daftar', function () {
    return back()->with('success', 'Login berhasil');
})->name('daftar.process');