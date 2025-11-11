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
        Schema::create('pesertadidiks', function (Blueprint $table) {
              $table->uuid('id')->primary();
            $table->uuid('sekolah_id');
            $table->uuid('tahunajaran_id');
            $table->string('nama');
            $table->char('jenis_kelamin', 1)->nullable();
            $table->string('nisn')->unique();
            $table->string('nipd')->unique()->nullable();
            $table->string('nik')->unique()->nullable();
            $table->uuid('kebutuhankhusus_id')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->uuid('agama_id')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt', 5)->nullable()->default('00000');
            $table->string('rw', 5)->nullable()->default('00000');
            $table->string('nama_dusun')->nullable();
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->text('maps')->nullable();
            $table->unsignedInteger('anak_keberapa')->default(1);
            $table->string('no_telepon_rumah')->nullable();
            $table->string('no_telepon_seluler')->nullable();
            $table->string('email')->nullable();
            $table->boolean('penerima_kps')->default(false);
            $table->string('no_kps')->nullable();
            $table->boolean('layak_pip')->default(false);
            $table->uuid('alasanlayakpip_id')->nullable();
            $table->boolean('penerima_kip')->default(false);
            $table->string('no_kip')->nullable();
            $table->string('nama_kip')->nullable();
            $table->uuid('statuspotonganspp_id')->nullable();
            $table->uuid('jenistinggal_id')->nullable();
            $table->uuid('alattransportasi_id')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('reg_akta_lahir')->nullable();
            $table->uuid('bank_id')->nullable();
            $table->string('rek_bank')->nullable();
            $table->string('nama_kcp')->nullable();
            $table->string('rek_atas_nama')->nullable();
            $table->unsignedInteger('status_data')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->char('tahun_lahir_ayah', 4)->nullable();
            $table->uuid('jenjangpendidikan_ayah_id')->nullable();
            $table->uuid('pekerjaan_ayah_id')->nullable();
            $table->uuid('penghasilan_ayah_id')->nullable();
            $table->uuid('kebutuhankhusus_ayah_id')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->char('tahun_lahir_ibu', 4)->nullable();
            $table->uuid('jenjangpendidikan_ibu_id')->nullable();
            $table->uuid('pekerjaan_ibu_id')->nullable();
            $table->uuid('penghasilan_ibu_id')->nullable();
            $table->uuid('kebutuhankhusus_ibu_id')->nullable();
            $table->string('nik_wali')->nullable();
            $table->char('tahun_lahir_wali', 4)->nullable();
            $table->uuid('jenjangpendidikan_wali_id')->nullable();
            $table->uuid('pekerjaan_wali_id')->nullable();
            $table->uuid('penghasilan_wali_id')->nullable();
            $table->uuid('kebutuhankhusus_wali_id')->nullable();
            $table->uuid('negara_id')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bank_id')->references('id')->on('banks')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alasanlayakpip_id')->references('id')->on('alasanlayakpips')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alattransportasi_id')->references('id')->on('alattransportasis')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jenistinggal_id')->references('id')->on('jenistinggals')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('kebutuhankhusus_id')->references('id')->on('kebutuhankhususes')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('agama_id')->references('id')->on('agama')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('penghasilan_wali_id')->references('id')->on('penghasilanortus')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pekerjaan_wali_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jenjangpendidikan_wali_id')->references('id')->on('jenjangpendidikans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('kebutuhankhusus_wali_id')->references('id')->on('kebutuhankhususes')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('penghasilan_ibu_id')->references('id')->on('penghasilanortus')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pekerjaan_ibu_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jenjangpendidikan_ibu_id')->references('id')->on('jenjangpendidikans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('kebutuhankhusus_ibu_id')->references('id')->on('kebutuhankhususes')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('penghasilan_ayah_id')->references('id')->on('penghasilanortus')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pekerjaan_ayah_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('jenjangpendidikan_ayah_id')->references('id')->on('jenjangpendidikans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('kebutuhankhusus_ayah_id')->references('id')->on('kebutuhankhususes')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('negara_id')->references('id')->on('negara')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('tahunajaran_id')->references('id')->on('tahunajarans')->onUpdate('CASCADE')->onDelete('CASCADE');

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
        Schema::dropIfExists('pesertadidiks');
    }
};