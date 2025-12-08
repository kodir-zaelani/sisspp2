<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('wali-signup', [App\Http\Controllers\Wali\RagisterWaliController::class, 'create'])
        ->name('wali.register');

    Route::post('wali-signup', [App\Http\Controllers\Wali\RagisterWaliController::class, 'store']);
});

Route::middleware(['auth', 'web', 'role:wali-web'])->group(function () {

    // Dashboard
    Route::get('wali/dashboard', [App\Http\Controllers\Wali\WaliDashboardController::class, 'index'])->name('wali.dashboard');
    Route::get('wali/keuangan', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'index'])->name('wali.keuangan');
    Route::get('wali/keranjang', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'orderbayar'])->name('wali.keranjang');
    Route::get('keuangan/pembayaran', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'pembayaran'])->name('wali.pembayaran');

});