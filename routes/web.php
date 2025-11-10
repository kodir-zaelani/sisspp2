<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('root');

Route::middleware(['auth', 'verified', 'web'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Dashboard
    Route::get('backend/home', [App\Http\Controllers\Backend\BackendController::class, 'index'])->name('backend.dashboard');

    // User
    Route::get('backend/users/index', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.users.index');
    Route::get('backend/users/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('backend.users.create');
    Route::post('backend/users/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('backend.users.store');
    Route::get('backend/users/{user}/edit', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('backend.users.edit');
    Route::put('backend/users/{user}/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('backend.users.update');
    Route::get('backend/users/profile', [App\Http\Controllers\Backend\UserController::class, 'userprofile'])->name('backend.userprofile');

    // Setting Web
    Route::get('backend/settings', [App\Http\Controllers\Backend\SettingController::class, 'setting'])->name('backend.settings.index');
    Route::post('backend/settings/create', [App\Http\Controllers\Backend\SettingController::class, 'createsetting'])->name('backend.settings.create');
    Route::post('backend/settings/store', [App\Http\Controllers\Backend\SettingController::class, 'storesetting'])->name('backend.settings.store');
    Route::get('backend/settings/{setting}/edit', [App\Http\Controllers\Backend\SettingController::class, 'editsetting'])->name('backend.settings.edit');
    Route::put('backend/settings/{setting}/update', [App\Http\Controllers\Backend\SettingController::class, 'updatesetting'])->name('backend.settings.update');

 // Yayasan
    Route::get('backend/yayasan', [App\Http\Controllers\Backend\YayasanController::class, 'index'])->name('backend.yayasan.index');
    Route::get('backend/yayasan/create', [App\Http\Controllers\Backend\YayasanController::class, 'create'])->name('backend.yayasan.create');
    Route::post('backend/yayasan/store', [App\Http\Controllers\Backend\YayasanController::class, 'store'])->name('backend.yayasan.store');
    Route::get('backend/yayasan/{yayasan}/edit', [App\Http\Controllers\Backend\YayasanController::class, 'edit'])->name('backend.yayasan.edit');
    Route::put('backend/yayasan/{yayasan}/update', [App\Http\Controllers\Backend\YayasanController::class, 'update'])->name('backend.yayasan.update');
    Route::put('backend/yayasan/{yayasan}/updatelogo', [App\Http\Controllers\Backend\YayasanController::class, 'updatelogo'])->name('backend.yayasan.updatelogo');
    Route::get('backend/yayasan/export', [App\Http\Controllers\Backend\YayasanController::class, 'export'])->name('backend.yayasan.export');
    Route::post('backend/yayasan/import', [App\Http\Controllers\Backend\YayasanController::class, 'import'])->name('backend.yayasan.import');

    // Sekolah
    Route::get('backend/sekolah', [App\Http\Controllers\Backend\SekolahController::class, 'index'])->name('backend.sekolah.index');
    Route::get('backend/sekolah/create', [App\Http\Controllers\Backend\SekolahController::class, 'create'])->name('backend.sekolah.create');
    Route::post('backend/sekolah/store', [App\Http\Controllers\Backend\SekolahController::class, 'store'])->name('backend.sekolah.store');
    Route::get('backend/sekolah/{sekolah}/edit', [App\Http\Controllers\Backend\SekolahController::class, 'edit'])->name('backend.sekolah.edit');
    Route::put('backend/sekolah/{sekolah}/update', [App\Http\Controllers\Backend\SekolahController::class, 'update'])->name('backend.sekolah.update');
    Route::put('backend/sekolah/{sekolah}/updatelogo', [App\Http\Controllers\Backend\SekolahController::class, 'updatelogo'])->name('backend.sekolah.updatelogo');
    Route::post('backend/sekolah/import', [App\Http\Controllers\Backend\SekolahController::class, 'import'])->name('backend.sekolah.import');

    // PTK
    Route::get('backend/ptk', [App\Http\Controllers\Backend\PtkController::class, 'index'])->name('backend.ptk.index');
    Route::get('backend/ptk/create', [App\Http\Controllers\Backend\PtkController::class, 'create'])->name('backend.ptk.create');
    Route::post('backend/ptk/store', [App\Http\Controllers\Backend\PtkController::class, 'store'])->name('backend.ptk.store');
    Route::get('backend/ptk/{ptk}/edit', [App\Http\Controllers\Backend\PtkController::class, 'edit'])->name('backend.ptk.edit');
    Route::put('backend/ptk/{ptk}/update', [App\Http\Controllers\Backend\PtkController::class, 'update'])->name('backend.ptk.update');
    Route::put('backend/ptk/{ptk}/updatelogo', [App\Http\Controllers\Backend\PtkController::class, 'updatelogo'])->name('backend.ptk.updatelogo');
    Route::post('backend/ptk/import', [App\Http\Controllers\Backend\PtkController::class, 'import'])->name('backend.ptk.import');

    // Jurusansp
    Route::get('backend/jurusansp', [App\Http\Controllers\Backend\JurusanspController::class, 'index'])->name('backend.jurusansp.index');
    Route::get('backend/jurusansp/create', [App\Http\Controllers\Backend\JurusanspController::class, 'create'])->name('backend.jurusansp.create');
    Route::post('backend/jurusansp/store', [App\Http\Controllers\Backend\JurusanspController::class, 'store'])->name('backend.jurusansp.store');
    Route::get('backend/jurusansp/{jurusansp}/edit', [App\Http\Controllers\Backend\JurusanspController::class, 'edit'])->name('backend.jurusansp.edit');
    Route::put('backend/jurusansp/{jurusansp}/update', [App\Http\Controllers\Backend\JurusanspController::class, 'update'])->name('backend.jurusansp.update');

    Route::get('backend/get/jurusansp/{sekolah_id}', [App\Http\Controllers\Backend\JurusanspController::class, 'getjurusansp'])->name('backend.jurusansp.getjurusansp');
    Route::get('backend/get/jurusan/{jurusan_id}', [App\Http\Controllers\Backend\JurusanController::class, 'getjurusan'])->name('backend.jurusan.getjurusan');
    // Rombonganbelajar
    Route::get('backend/rombonganbelajar', [App\Http\Controllers\Backend\RombonganbelajarController::class, 'index'])->name('backend.rombonganbelajar.index');
    Route::get('backend/rombonganbelajar/create', [App\Http\Controllers\Backend\RombonganbelajarController::class, 'create'])->name('backend.rombonganbelajar.create');
    Route::post('backend/rombonganbelajar/store', [App\Http\Controllers\Backend\RombonganbelajarController::class, 'store'])->name('backend.rombonganbelajar.store');
    Route::get('backend/rombonganbelajar/{rombonganbelajar}/edit', [App\Http\Controllers\Backend\RombonganbelajarController::class, 'edit'])->name('backend.rombonganbelajar.edit');
    Route::put('backend/rombonganbelajar/{rombonganbelajar}/update', [App\Http\Controllers\Backend\RombonganbelajarController::class, 'update'])->name('backend.rombonganbelajar.update');

    // Json Data for City, District and Village
    Route::get('backend/get/city/{province_code}', [App\Http\Controllers\Backend\WilayahController::class, 'getcity'])->name('backend.wilayah.getcity');
    Route::get('backend/get/distric/{city_code}', [App\Http\Controllers\Backend\WilayahController::class, 'getdistrict'])->name('backend.wilayah.getdistrict');
    Route::get('backend/get/village/{district_code}', [App\Http\Controllers\Backend\WilayahController::class, 'getvillage'])->name('backend.wilayah.getvillage');

    // Permission
    Route::get('backend/permissions/index', [App\Http\Controllers\Backend\PermissionController::class, 'index'])->name('backend.permissions.index');

    // Role
    Route::get('backend/roles/index', [App\Http\Controllers\Backend\RoleController::class, 'index'])->name('backend.roles.index');
    Route::get('backend/roles/create', [App\Http\Controllers\Backend\RoleController::class, 'create'])->name('backend.roles.create');
    Route::post('backend/roles/store', [App\Http\Controllers\Backend\RoleController::class, 'store'])->name('backend.roles.store');
    Route::get('backend/roles/{role}/edit', [App\Http\Controllers\Backend\RoleController::class, 'edit'])->name('backend.roles.edit');
    Route::put('backend/roles/{role}/update', [App\Http\Controllers\Backend\RoleController::class, 'update'])->name('backend.roles.update');

    // Wilayah Indonesia
    Route::get('backend/indonesia', [App\Http\Controllers\Backend\WilayahController::class, 'index'])->name('backend.wilayah.index');

    // Agama
    Route::get('backend/agama', [App\Http\Controllers\Backend\AgamaController::class, 'index'])->name('backend.agama.index');

    // Bentuk Pendidikan
    Route::get('backend/bentukpendidikan', [App\Http\Controllers\Backend\BentukpendidikanController::class, 'index'])->name('backend.bentukpendidikan.index');

    // Jenjang Pendidikan
    Route::get('backend/jenjangpendidikan', [App\Http\Controllers\Backend\JenjangpendidikanController::class, 'index'])->name('backend.jenjangpendidikan.index');

    // Tingkat Pendidikan
    Route::get('backend/tingkatpendidikan', [App\Http\Controllers\Backend\TingkatpendidikanController::class, 'index'])->name('backend.tingkatpendidikan.index');

    // Status Kepemilikan
    Route::get('backend/statuskepemilikan', [App\Http\Controllers\Backend\StatuskepemilikanController::class, 'index'])->name('backend.statuskepemilikan.index');

    // Kebutuhan Khusus
    Route::get('backend/kebutuhankhusus', [App\Http\Controllers\Backend\KebutuhankhususController::class, 'index'])->name('backend.kebutuhankhusus.index');

    // Akreditasi
    Route::get('backend/akreditasi', [App\Http\Controllers\Backend\AkreditasiController::class, 'index'])->name('backend.akreditasi.index');

    // Jenis Rombel
    Route::get('backend/jenisrombel', [App\Http\Controllers\Backend\JenisrombelController::class, 'index'])->name('backend.jenisrombel.index');

    // Jenis PTK
    Route::get('backend/jenisptk', [App\Http\Controllers\Backend\JenisptkController::class, 'index'])->name('backend.jenisptk.index');

    // Jurusan
    Route::get('backend/jurusan', [App\Http\Controllers\Backend\JurusanController::class, 'index'])->name('backend.jurusan.index');

    // Kurikulum Controller
    Route::get('backend/kurikulum', [App\Http\Controllers\Backend\KurikulumController::class, 'index'])->name('backend.kurikulum.index');

    // Matapelajaran Controller
    Route::get('backend/matapelajaran', [App\Http\Controllers\Backend\MatapelajaranController::class, 'index'])->name('backend.matapelajaran.index');

    // Tahun ajaran Controller
    Route::get('backend/tahunajaran', [App\Http\Controllers\Backend\TahunajaranController::class, 'index'])->name('backend.tahunajaran.index');

    // SemesterController
    Route::get('backend/semester', [App\Http\Controllers\Backend\SemesterController::class, 'index'])->name('backend.semester.index');

    // SemesterController
    Route::get('backend/jenistagihan', [App\Http\Controllers\Backend\JenistagihanController::class, 'index'])->name('backend.jenistagihan.index');

});

require __DIR__.'/auth.php';
