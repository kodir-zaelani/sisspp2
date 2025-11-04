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
        Schema::create('jurusans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('jurusanid', 25)->unique();
            $table->string('nama_jurusan', 100);
            $table->decimal('untuk_sma', 1, 0);
            $table->decimal('untuk_smk', 1, 0);
            $table->decimal('untuk_pt', 1, 0);
            $table->decimal('untuk_slb', 1, 0);
            $table->decimal('untuk_smklb', 1, 0);
            $table->uuid('jenjangpendidikan_id')->nullable();
            $table->uuid('jurusan_induk')->nullable();
            $table->string('level_bidang_id', 5);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('jenjangpendidikan_id')->references('id')->on('jenjangpendidikans')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
