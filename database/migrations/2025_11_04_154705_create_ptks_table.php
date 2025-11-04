<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    */
    public function up(): void
    {
        Schema::create('ptks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('sekolah_id');
            $table->char('gelar_depan')->nullable();
            $table->string('nama');
            $table->char('gelar_belakang')->nullable();
            $table->char('jenis_kelamin', 1)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('nip')->unique();
            $table->uuid('pangkatgolongan_id')->nullable();
            $table->string('nuptk')->unique()->nullable();
            $table->string('niy_nigk')->unique()->nullable();
            $table->foreignUuid('jenisptk_id')->nullable();
            $table->foreignUuid('agama_id')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt', 5)->nullable()->default('00000');
            $table->string('rw', 5)->nullable()->default('00000');
            $table->string('nama_dusun')->nullable();
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->string('no_telepon_rumah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->date('tgl_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tgl_pengangkatan')->nullable();
            $table->uuid('lembagapengangkat_id')->nullable();
            $table->uuid('sumbergaji_id')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->tinyInteger('status_perkawinan')->nullable();
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->uuid('pekerjaan_suami_istri_id')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->tinyInteger('lisensi_kepala_sekolah')->nullable();
            $table->string('npwp')->nullable();
            $table->string('penugasan')->default('induk');
            $table->uuid('jenjangpendidikan_id')->nullable();
            $table->uuid('jurusan_id')->nullable();
            $table->char('kode_sertifikasi', 5)->nullable();
            $table->string('No_sertifikasi_guru')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->uuid('bank_id')->nullable();
            $table->string('rek_bank')->nullable();
            $table->string('nama_kcp')->nullable();
            $table->string('rek_atas_nama')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('karpas')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->uuid('statuskeaktifan_id')->nullable();
            $table->uuid('keahlianlaboratorium_id')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->text('maps')->nullable();
            $table->unsignedInteger('status_data')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bank_id')->references('id')->on('banks')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('sumbergaji_id')->references('id')->on('sumbergajis')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('pekerjaan_suami_istri_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('statuskeaktifan_id')->references('id')->on('statuskeaktifans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('lembagapengangkat_id')->references('id')->on('lembagapengangkats')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('pangkatgolongan_id')->references('id')->on('pangkatgolongans')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('province_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'provinces')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('city_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'cities')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('district_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'districts')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('village_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'villages')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('ptks');
    }
};