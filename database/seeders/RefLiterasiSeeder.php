<?php

namespace Database\Seeders;

use App\Models\RefLiterasi;
use Illuminate\Database\Seeder;

class RefLiterasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefLiterasi::create(['nama' => 'Al-Qur\'an']);
        RefLiterasi::create(['nama' => 'Al-Kitab']);
        RefLiterasi::create(['nama' => 'Referensi Keagamaan']);
    }
}
