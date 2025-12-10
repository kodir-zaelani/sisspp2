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
    Route::get('wali/pengembangan', [App\Http\Controllers\Wali\WaliDashboardController::class, 'commingsoon'])->name('wali.pengembangan');
    Route::get('wali/keuangan', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'index'])->name('wali.keuangan');
    Route::get('wali/keranjang', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'orderbayar'])->name('wali.keranjang');
    Route::get('keuangan/pembayaran', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'pembayaran'])->name('wali.pembayaran');
    Route::get('keuangan/bayar/{invoice}', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'bayartagihan'])->name('wali.bayar');
    Route::get('keuangan/detailinvoice/{invoice}', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'detailinvoice'])->name('wali.detailinvoice');
    Route::get('keuangan/detailinvoice/{invoice}/view/pdf', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'detailinvoice_pdf'])->name('wali.detailinvoice-pdf');
    Route::get('keuangan/detailinvoice/{invoice}/download/pdf', [App\Http\Controllers\Wali\WaliKeuanganController::class, 'detailinvoice_pdf_download'])->name('wali.detailinvoice.download');
    Route::get('wali/pesertadidik', [App\Http\Controllers\Wali\WaliPesertadidikController::class, 'index'])->name('wali.pesertadidik');

});