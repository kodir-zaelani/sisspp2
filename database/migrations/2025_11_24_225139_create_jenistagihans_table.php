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
        Schema::create('jenistagihans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('sekolah_id')->constrained('sekolahs')->cascadeOnDelete();
            $table->foreignUuid('tahunajaran_id')->constrained('tahunajarans')->cascadeOnDelete();
            $table->string('nama');
            $table->char('periodik')->default('Ya');
            $table->enum('jenis_periodik', ['bulan', 'tahun_ajaran'])->nullable();
            $table->char('perlu_tagihan')->default('Ya');
            $table->decimal('besaran', 8, 2)->default(0);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenistagihans');
    }
};
