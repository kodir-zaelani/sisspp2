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
        Schema::create('prasaranas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sekolah_id');
            $table->uuid('jenisprasarana_id');
            $table->uuid('indukprasarana_id')->nullable();
            $table->uuid('statuskepemilikansarpras_id')->nullabel();
            $table->string('nama');
            $table->double('panjang')->nullable();
            $table->double('lebar')->nullable();
            $table->string('regsarpras')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sekolah_id')->references('id')->on('sekolahs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('jenisprasarana_id')->references('id')->on('jenisprasaranas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('indukprasarana_id')->references('id')->on('prasaranas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('statuskepemilikansarpras_id')->references('id')->on('statuskepemilikansarpras')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prasaranas');
    }
};
