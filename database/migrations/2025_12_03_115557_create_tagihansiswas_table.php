<?php

use App\Enums\FeeStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
    * Run the migrations.
    */
    public function up(): void
    {
        Schema::create('tagihansiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('sekolah_id')->constrained('sekolahs')->cascadeOnDelete();
            $table->foreignUuid('rombonganbelajar_id')->constrained('rombonganbelajars')->cascadeOnDelete();
            $table->foreignUuid('anggotarombel_id')->constrained('anggotarombels')->cascadeOnDelete();
            $table->foreignUuid('pesertadidik_id')->constrained('pesertadidiks')->cascadeOnDelete();
            $table->foreignUuid('semester_id')->constrained('semesters')->cascadeOnDelete();
            $table->foreignUuid('jenistagihan_id')->constrained('jenistagihans')->cascadeOnDelete();
            $table->unsignedInteger('periode_bulan')->default(0);
            $table->unsignedInteger('nilai_tagihan');
            $table->string('statusbayar')->default('Belum');
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
        Schema::dropIfExists('tagihansiswas');
    }
};