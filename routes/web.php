<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\FormuserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;


Route::get('/', function () {
    return view('dashboard');
});


Route::middleware(['guest'])->group(function () {
    // LOGIN
    Route::get('/login',[AuthController::class,'ShowLoginForm'])->name('login');
    Route::post('/login/check',[AuthController::class,'authenticate']);

    // REGISTER
    Route::get('/register',[RegisterController::class,'ShowRegistrationForm']);
    Route::post('/register/check',[RegisterController::class,'RegisterCheck']);
});

Route::middleware(['auth'])->group(function () {
    // FORM PROFILE (TIDAK pakai ProfileCheck, agar bisa isi)
    Route::get('/profile',[FormuserController::class,'index'])->name('profile');
    Route::post('/profile/submit', [FormuserController::class, 'submitProfile'])->name('profile_submit');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

    // DOMISILI
    Route::get('/provinsi', [FormuserController::class, 'getProvinsi']);
    Route::get('/kabupaten/{provinsi}', [FormuserController::class, 'getKabupaten']);
    Route::get('/kecamatan/{kabupaten}', [FormuserController::class, 'getKecamatan']);
    Route::get('/desa/{kecamatan}', [FormuserController::class, 'getDesa']);
});

// Halaman yang WAJIB sudah punya profile
Route::middleware(['auth','ProfileCheck'])->group(function () {
    Route::get('/index',[DashboardController::class,'index'])->name('index');
    Route::get('/pengajuan', [PengajuanController::class, 'showAjuanForm'])->name('pengajuan');
    Route::post('/pengajuan/submit', [PengajuanController::class, 'submit']);
    Route::get('/profile_detail',[profileController::class,'showProfile'])->name('profile_detail');
});





Route::get('/test',[DashboardController::class,'test']);