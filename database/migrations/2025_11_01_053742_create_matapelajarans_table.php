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
        Schema::create('matapelajarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('mata_pelajaran_id');
            $table->string('nama');
            $table->decimal('pilihan_sekolah', 1, 0);
            $table->decimal('pilihan_buku', 1, 0);
            $table->decimal('pilihan_kepengawasan', 1, 0);
            $table->decimal('pilihan_evaluasi', 1, 0);
            $table->string('jurusanid', 25)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matapelajarans');
    }
};
