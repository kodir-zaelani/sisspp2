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
        Schema::create('anggotarombels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('rombonganbelajar_id')->constrained('rombonganbelajars')->cascadeOnDelete();
            $table->foreignUuid('pesertadidik_id')->constrained('pesertadidiks')->cascadeOnDelete();
            $table->foreignUuid('semester_id')->constrained('semesters')->cascadeOnDelete();
            $table->foreignUuid('jenispendaftaran_id')->constrained('jenispendaftarans')->cascadeOnDelete();
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotarombels');
    }
};
