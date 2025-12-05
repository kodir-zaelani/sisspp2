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
        Schema::create('detailtempinvoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('tagihansiswa_id')->constrained('tagihansiswas')->cascadeOnDelete();
            $table->unsignedInteger('periode_bulan');
            $table->unsignedInteger('nilai_tagihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailtempinvoices');
    }
};