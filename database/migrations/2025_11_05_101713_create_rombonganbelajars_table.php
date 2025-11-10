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
        Schema::create('rombonganbelajars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sekolah_id');
            $table->uuid('semester_id');
            $table->uuid('jurusansp_id')->nullable();
            $table->uuid('tingkatpendidikan_id');
            $table->uuid('kurikulum_id')->nullable();
            $table->uuid('jenisrombel_id')->nullable();
            $table->uuid('ptk_id')->nullable();
            $table->string('nama')->unique();
            $table->string('moving_class')->default('Tidak');
            $table->tinyInteger('sks')->nullable();
            $table->uuid('prasarana_id')->nullable();
            $table->uuid('kebutuhankhusus_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jenisrombel_id')->references('id')->on('jenisrombels')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('tingkatpendidikan_id')->references('id')->on('tingkatpendidikans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('prasarana_id')->references('id')->on('prasaranas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('ptk_id')->references('id')->on('ptks')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kebutuhankhusus_id')->references('id')->on('kebutuhankhususes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rombonganbelajars');
    }
};
