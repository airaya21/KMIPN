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

    Route::get('/register/parent',  [AuthController::class, 'showRegisterParent'])->name('register.parent');
    Route::get('/register/daycare', [AuthController::class, 'showRegisterDaycare'])->name('register.daycare');
    Route::post('/register', [AuthController::class, 'register'])->name('register.process');

    // Superadmin Login (Private)
    Route::get('/superadmin/login', [AuthController::class, 'showSuperAdminLogin'])->name('superadmin.login');
    Route::post('/superadmin/login', [AuthController::class, 'superAdminLogin'])->name('superadmin.login.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ─── Super Admin Dashboard ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role:superadmin'])->group(function () {

    // Dashboard Utama
    Route::get('/superadmin/dashboard', [App\Http\Controllers\SuperAdminController::class, 'dashboard'])
        ->name('superadmin.dashboard');

    // ─── Manajemen Daycare ─────────────────────────────────────
    Route::get('/superadmin/daycares', [App\Http\Controllers\SuperAdminController::class, 'daycares'])
        ->name('superadmin.daycares');

    Route::get('/superadmin/verifications', [App\Http\Controllers\SuperAdminController::class, 'verifications'])
        ->name('superadmin.verifications');

    Route::get('/superadmin/suspended', [App\Http\Controllers\SuperAdminController::class, 'suspended'])
        ->name('superadmin.suspended');

    // ─── Pemantauan Nasional ───────────────────────────────────
    Route::get('/superadmin/live-alerts', [App\Http\Controllers\SuperAdminController::class, 'liveAlerts'])
        ->name('superadmin.live-alerts');

    Route::get('/superadmin/ai-monitoring', [App\Http\Controllers\SuperAdminController::class, 'aiMonitoring'])
        ->name('superadmin.ai-monitoring');

    Route::get('/superadmin/emergency-center', [App\Http\Controllers\SuperAdminController::class, 'emergencyCenter'])
        ->name('superadmin.emergency-center');

    // ─── Pengaduan ─────────────────────────────────────────────
    Route::get('/superadmin/parent-reports', [App\Http\Controllers\SuperAdminController::class, 'parentReports'])
        ->name('superadmin.parent-reports');

    Route::get('/superadmin/investigations', [App\Http\Controllers\SuperAdminController::class, 'investigations'])
        ->name('superadmin.investigations');

    // ─── Pengguna ──────────────────────────────────────────────
    Route::get('/superadmin/parents', [App\Http\Controllers\SuperAdminController::class, 'parents'])
        ->name('superadmin.parents');

    Route::get('/superadmin/caregivers', [App\Http\Controllers\SuperAdminController::class, 'caregivers'])
        ->name('superadmin.caregivers');

    Route::get('/superadmin/admins', [App\Http\Controllers\SuperAdminController::class, 'admins'])
        ->name('superadmin.admins');

    // ─── Analitik ──────────────────────────────────────────────
    Route::get('/superadmin/safety-score', [App\Http\Controllers\SuperAdminController::class, 'safetyScore'])
        ->name('superadmin.safety-score');

    Route::get('/superadmin/alert-trends', [App\Http\Controllers\SuperAdminController::class, 'alertTrends'])
        ->name('superadmin.alert-trends');

    Route::get('/superadmin/reports', [App\Http\Controllers\SuperAdminController::class, 'reports'])
        ->name('superadmin.reports');

    // ─── Paket Langganan ───────────────────────────────────────
    Route::get('/superadmin/subscriptions', [App\Http\Controllers\SuperAdminController::class, 'subscriptions'])
        ->name('superadmin.subscriptions');
});

// ─── Admin Dashboard ──────────────────────────────────────────────────────────
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/monitoring', [App\Http\Controllers\AdminController::class, 'monitoring'])->name('admin.monitoring');
    Route::get('/admin/history', [App\Http\Controllers\AdminController::class, 'history'])->name('admin.history');
    Route::get('/admin/children',   [App\Http\Controllers\AdminController::class, 'children'])->name('admin.children');
    Route::get('/admin/reports',    [App\Http\Controllers\AdminController::class, 'reports'])->name('admin.reports');

    // ─── Kelola Akun Orang Tua & Pengasuh (CRUD) ──────────────
    Route::resource('/admin/users', \App\Http\Controllers\AdminUserController::class)->names('admin.users');
});

// ─── Orang Tua Dashboard ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role:parent'])->group(function () {
    Route::get('/parent/dashboard', [App\Http\Controllers\ParentController::class, 'dashboard'])->name('parent.dashboard');
    Route::get('/parent/children',  [App\Http\Controllers\ParentController::class, 'children'])->name('parent.children');
    Route::get('/parent/activity',  [App\Http\Controllers\ParentController::class, 'activity'])->name('parent.activity');
    Route::get('/parent/reports',   [App\Http\Controllers\ParentController::class, 'reports'])->name('parent.reports');
    Route::get('/parent/pickup',    [App\Http\Controllers\ParentController::class, 'pickup'])->name('parent.pickup');
    Route::get('/parent/messages',  [App\Http\Controllers\ParentController::class, 'messages'])->name('parent.messages');
    Route::get('/parent/notifications', [App\Http\Controllers\ParentController::class, 'notifications'])->name('parent.notifications');
});

// ─── Pengasuh Dashboard ───────────────────────────────────────────────────────
Route::middleware(['auth', 'role:caregiver'])->group(function () {
    Route::get('/caregiver/dashboard', [App\Http\Controllers\CaregiverController::class, 'dashboard'])->name('caregiver.dashboard');
    Route::get('/caregiver/children',  [App\Http\Controllers\CaregiverController::class, 'children'])->name('caregiver.children');
    Route::get('/caregiver/activity',  [App\Http\Controllers\CaregiverController::class, 'activity'])->name('caregiver.activity');
    Route::get('/caregiver/schedule',  [App\Http\Controllers\CaregiverController::class, 'schedule'])->name('caregiver.schedule');
    Route::get('/caregiver/reports',   [App\Http\Controllers\CaregiverController::class, 'reports'])->name('caregiver.reports');
});