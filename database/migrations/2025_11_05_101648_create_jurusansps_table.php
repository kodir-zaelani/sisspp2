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
        Schema::create('jurusansps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sekolah_id');
            $table->uuid('kebutuhankhusus_id')->nullable();
            $table->uuid('jurusan_id');
            $table->string('nama');
            $table->string('sk_izin')->nullable();
            $table->date('tanggal_sk_izin')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kebutuhankhusus_id')->references('id')->on('kebutuhankhususes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('jurusansps');
    }
};