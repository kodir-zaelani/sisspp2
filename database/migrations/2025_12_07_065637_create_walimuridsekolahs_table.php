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
        Schema::create('walimuridsekolahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignUuid('sekolah_id')->constrained('sekolahs')->cascadeOnDelete();
            $table->foreignUuid('pesertadidik_id')->constrained('pesertadidiks')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();

            Schema::table('users', function (Blueprint $table) {
                $table->string('type_user')->nullable()->after('phone');
                $table->string('type_ortu')->nullable()->after('type_user');
            });
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type_user');
            $table->dropColumn('type_ortu');

        });
        Schema::dropIfExists('walimuridsekolahs');
    }
};
