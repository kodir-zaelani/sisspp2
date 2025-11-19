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
        Schema::create('pdlongitudinals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('pesertadidik_id');
            $table->foreignUuid('semester_id')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('lingkar_kepala')->nullable();
            $table->integer('jarak_rumah_ke_sekolah')->nullable();
            $table->integer('jarak_rumah_ke_sekolah_km')->nullable();
            $table->integer('waktu_tempuh_ke_sekolah')->nullable();
            $table->integer('menit_tempuh_ke_sekolah')->nullable();
            $table->integer('jumlah_saudara_kandung')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->uuid('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('pesertadidik_id')->references('id')->on('pesertadidiks')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('pdlongitudinals');
    }
};
