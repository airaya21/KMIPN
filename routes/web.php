<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// ─── Auth (hanya untuk guest) ─────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/login',   [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',  [AuthController::class, 'login'])->name('login.process');

    Route::get('/daftar',  [AuthController::class, 'showRegister'])->name('daftar');
    Route::post('/daftar', [AuthController::class, 'register'])->name('daftar.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ─── Admin Dashboard ──────────────────────────────────────────────────────────
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/monitoring', [App\Http\Controllers\AdminController::class, 'monitoring'])->name('admin.monitoring');
    Route::get('/admin/history', [App\Http\Controllers\AdminController::class, 'history'])->name('admin.history');
    Route::get('/admin/children',   [App\Http\Controllers\AdminController::class, 'children'])->name('admin.children');
    Route::get('/admin/reports',    [App\Http\Controllers\AdminController::class, 'reports'])->name('admin.reports');
});

// ─── Orang Tua Dashboard ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role:parent'])->group(function () {
    Route::get('/parent/dashboard', [App\Http\Controllers\ParentController::class, 'dashboard'])->name('parent.dashboard');
    Route::get('/parent/children',  [App\Http\Controllers\ParentController::class, 'children'])->name('parent.children');
    Route::get('/parent/activity',  [App\Http\Controllers\ParentController::class, 'activity'])->name('parent.activity');
    Route::get('/parent/reports',   [App\Http\Controllers\ParentController::class, 'reports'])->name('parent.reports');
    Route::get('/parent/messages',  [App\Http\Controllers\ParentController::class, 'messages'])->name('parent.messages');
});

// ─── Pengasuh Dashboard ───────────────────────────────────────────────────────
Route::middleware(['auth', 'role:caregiver'])->group(function () {
    Route::get('/caregiver/dashboard', [App\Http\Controllers\CaregiverController::class, 'dashboard'])->name('caregiver.dashboard');
    Route::get('/caregiver/children',  [App\Http\Controllers\CaregiverController::class, 'children'])->name('caregiver.children');
    Route::get('/caregiver/activity',  [App\Http\Controllers\CaregiverController::class, 'activity'])->name('caregiver.activity');
    Route::get('/caregiver/schedule',  [App\Http\Controllers\CaregiverController::class, 'schedule'])->name('caregiver.schedule');
    Route::get('/caregiver/reports',   [App\Http\Controllers\CaregiverController::class, 'reports'])->name('caregiver.reports');
});