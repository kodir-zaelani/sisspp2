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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nss')->nullable()->unique();
            $table->string('npsn')->unique();
            $table->uuid('yayasan_id')->nullable();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('nama_nomenklatur')->nullable();
            $table->uuid('bentukpendidikan_id')->nullable();
            $table->uuid('jenjangpendidikan_id')->nullable();
            $table->uuid('statuskepemilikan_id')->nullable();
            $table->uuid('kebutuhankhusus_id')->nullable();
            $table->integer('type_sekolah')->nullable();
            $table->integer('status_sekolah')->nullable();
            $table->string('sk_pendirian_sekolah')->nullable();
            $table->date('tanggal_pendirian_sekolah')->nullable();
            $table->string('sk_izin_operasional')->nullable();
            $table->date('tanggal_izin_operasional')->nullable();
            $table->string('no_rekening')->nullable();
            $table->uuid('bank_id')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('cabang_kcp_unit')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->integer('mbs')->nullable()->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_npwp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt', 5)->nullable()->default('00000');
            $table->string('rw', 5)->nullable()->       default('00000');
            $table->string('nama_dusun')->nullable();
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();
            $table->foreignUuid('negara_id')->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->text('maps')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('logo_sekolah')->nullable();
            $table->boolean('memungut_iuran')->default(false);
            $table->boolean('status_sekolah_update')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('bentukpendidikan_id')->references('id')->on('bentukpendidikans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jenjangpendidikan_id')->references('id')->on('jenjangpendidikans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('statuskepemilikan_id')->references('id')->on('statuskepemilikans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('yayasan_id')->references('id')->on('yayasans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('negara_id')->references('id')->on('negara')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bank_id')->references('id')->on('banks')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('kebutuhankhusus_id')->references('id')->on('kebutuhankhususes')->onUpdate('cascade')->onDelete('restrict');

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
        Schema::dropIfExists('sekolahs');
    }
};