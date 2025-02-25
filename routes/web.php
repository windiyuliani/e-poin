<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelanggaranController;
use App\Models\Pelanggaran;

Route::get('/', function () {
    return view('welcome');

});

Route::middleware('guest')->group(function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/create', [LoginRegisterController::class, 'create'])->name('akun.create');
    Route::get('/admin/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('akun.edit');
    Route::resource('/akun', SiswaController::class);
    Route::resource('/admin/siswa', SiswaController::class);
    Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/akun', [LoginRegisterController::class, 'index'])->name('akun');
    });
    Route::put('/updateEmail/{id}', [LoginRegisterController::class, 'updateEmail'])->name('updateEmail');
    Route::put('/updatePassword/{id}', [LoginRegisterController::class, 'updatePassword'])->name('updatePassword');
    Route::resource('/admin/pelanggaran', PelanggaranController::class);
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});
// Rute untuk Dashboard (user yang sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});