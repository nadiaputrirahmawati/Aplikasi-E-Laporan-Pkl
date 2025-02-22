<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route Guru
Route::prefix('teacher')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::get('class', [AdminController::class, 'kelas']);
    Route::get('students', [AdminController::class, 'siswa']);
    Route::get('students/detail', [AdminController::class, 'detailsiswa']);
    Route::get('students/logbook', [AdminController::class, 'logbook']);
    Route::get('title-report', [AdminController::class, 'judul_laporan']);
    Route::get('report', [AdminController::class, 'report']);
    Route::get('report/detail', [AdminController::class, 'detailreport']);
    Route::get('profile', [AdminController::class, 'profile']);
    Route::get('profile/update', [AdminController::class, 'profile_update']);
});
Route::post('/project/upload', [AdminController::class, 'detailreport'])->name('project.upload');

// Route Siswa
Route::prefix('students')->group(function () {
    Route::get('dashboard', [SiswaController::class, 'index']);
    Route::get('logbook', [SiswaController::class, 'jurnal_kegiatan']);
    Route::get('logbook/create', [SiswaController::class, 'create_logbook']);
    Route::get('title-report', [SiswaController::class, 'judul']);
    Route::get('report', [SiswaController::class, 'laporan']);
    Route::get('report/create', [SiswaController::class, 'create_laporan']);
    Route::get('profile', [SiswaController::class, 'profile']);
    Route::get('profile/update', [SiswaController::class, 'update_profile']);
});

// Route Operator
Route::prefix('operator')->group(function () {
    Route::get('/dashboard', [OperatorController::class, 'index']);
    Route::get('/teacher', [OperatorController::class, 'guru']);
    Route::get('/teacher/create', [OperatorController::class, 'create_guru']);
    Route::get('/stundents', [OperatorController::class, 'siswa']);
});
