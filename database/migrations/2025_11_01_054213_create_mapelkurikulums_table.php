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
        Schema::create('mapelkurikulums', function (Blueprint $table) {
            $table->uuid('id');
			$table->uuid('kurikulum_id');
            $table->uuid('matapelajaran_id');
            $table->uuid('tingkatpendidikan_id');
			$table->decimal('tingkat', 2, 0);
			$table->decimal('jumlah_jam', 2, 0);
            $table->decimal('jumlah_jam_maksimum',2, 0);
			$table->decimal('wajib',1, 0);
			$table->decimal('sks',2, 0);
			$table->decimal('a_peminatan',1, 0);
			$table->string('area_kompetensi', 1);
			$table->string('gmp_id', 36)->nullable();
			$table->timestamps();
            $table->softDeletes();
			$table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('matapelajaran_id')->references('id')->on('matapelajarans')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->primary(['id', 'matapelajaran_id', 'tingkatpendidikan_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapelkurikulums');
    }
};