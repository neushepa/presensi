<?php

use App\Http\Controllers\Admin\AbsensiGuruController;
use App\Http\Controllers\Admin\AbsensiStaffController;
use App\Http\Controllers\Admin\GuruMapelController;
use App\Http\Controllers\Admin\GuruStaffController;
use App\Http\Controllers\Admin\InboxController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\MesinFingerController;
use App\Http\Controllers\Admin\OutboxController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\WhatshappGatewayController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'can:admin']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);

        Route::prefix('data-master')->group(function () {
            Route::prefix('mata-pelajaran')->group(function () {
                Route::get('/', [MapelController::class, 'index'])->name('mapel.index');
                Route::get('/create', [MapelController::class, 'create'])->name('mapel.editor');
                Route::post('/store', [MapelController::class, 'store'])->name('mapel.store');
            });

            Route::prefix('guru-staff')->group(function () {
                Route::get('/', [GuruStaffController::class, 'index'])->name('guru_staff.index');
                Route::get('/create', [GuruStaffController::class, 'create'])->name('guru_staff.editor');
                Route::post('/store', [GuruStaffController::class, 'store'])->name('guru_staff.store');
            });

            Route::prefix('kelas')->group(function () {
                Route::get('/', [KelasController::class, 'index'])->name('kelas.index');
                Route::get('/create', [KelasController::class, 'create'])->name('kelas.editor');
                Route::post('/store', [KelasController::class, 'store'])->name('kelas.store');
            });

            Route::prefix('guru-mapel')->group(function () {
                Route::get('/', [GuruMapelController::class, 'index'])->name('guru_mapel.index');
                Route::get('/create', [GuruMapelController::class, 'create'])->name('guru_mapel.editor');
                Route::post('/store', [GuruMapelController::class, 'store'])->name('guru_mapel.store');
            });

            Route::prefix('jadwal')->group(function () {
                Route::get('/', [JadwalController::class, 'index'])->name('jadwal.index');
                Route::get('/create', [JadwalController::class, 'create'])->name('jadwal.editor');
                Route::post('/store', [JadwalController::class, 'store'])->name('jadwal.store');
            });
        });

        Route::prefix('presensi')->group(function () {
            Route::prefix('absensi-guru')->group(function () {
                Route::get('/', [AbsensiGuruController::class, 'index'])->name('absensi_guru.index');
                Route::get('/create', [AbsensiGuruController::class, 'create'])->name('absensi_guru.editor');
                Route::post('/store', [AbsensiGuruController::class, 'store'])->name('absensi_guru.store');
            });

            Route::prefix('absensi-staff')->group(function () {
                Route::get('/', [AbsensiStaffController::class, 'index'])->name('absensi_staff.index');
                Route::get('/create', [AbsensiStaffController::class, 'create'])->name('absensi_staff.editor');
                Route::post('/store', [AbsensiStaffController::class, 'store'])->name('absensi_staff.store');
            });
        });

        Route::prefix('pesan')->group(function () {
            Route::prefix('inbox')->group(function () {
             Route::get('/', [InboxController::class, 'index'])->name('inbox.index');
             Route::get('/create', [InboxController::class, 'create'])->name('inbox.editor');
             Route::post('/store', [InboxController::class, 'store'])->name('inbox.store');
            });

            Route::prefix('outbox')->group(function () {
             Route::get('/', [OutboxController::class, 'index'])->name('outbox.index');
             Route::get('/create', [OutboxController::class, 'create'])->name('outbox.editor');
             Route::post('/store', [OutboxController::class, 'store'])->name('outbox.store');
            });
         });
    });

    Route::prefix('pengaturan')->group(function () {
        Route::prefix('whatshapp-gateway')->group(function () {
            Route::get('/', [WhatshappGatewayController::class, 'index'])->name('whatsapp_gateway.index');
            Route::get('/create', [WhatshappGatewayController::class, 'create'])->name('whatsapp_gateway.editor');
            Route::post('/store', [WhatshappGatewayController::class, 'store'])->name('whatsapp_gateway.store');
        });

        Route::prefix('mesin-finger')->group(function () {
            Route::get('/', [MesinFingerController::class, 'index'])->name('mesin_finger.index');
            Route::get('/create', [MesinFingerController::class, 'create'])->name('mesin_finger.editor');
            Route::post('/store', [MesinFingerController::class, 'store'])->name('mesin_finger.store');
        });

        Route::prefix(('pengguna'))->group(function () {
            Route::get('/', [PenggunaController::class, 'index'])->name('pengguna.index');
            Route::get('/create', [PenggunaController::class, 'create'])->name('pengguna.editor');
            Route::post('/store', [PenggunaController::class, 'store'])->name('pengguna.store');
        });
    });

});







