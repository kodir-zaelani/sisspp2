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
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('kurikulumid');
            $table->string('nama_kurikulum', 120);
            $table->date('mulai_berlaku');
            $table->decimal('sistem_sks', 1, 0);
            $table->decimal('total_sks', 3, 0);
            $table->uuid('jenjangpendidikan_id');
            $table->string('jurusanid', 25)->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('jenjangpendidikan_id')->references('id')->on('jenjangpendidikans')->onUpdate('CASCADE')->onDelete('CASCADE');
            // $table->foreign('jurusanid')->references('jurusanid')->on('jurusans')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulums');
    }
};