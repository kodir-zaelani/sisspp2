<?php

namespace Database\Seeders;

use App\Models\Jenispengaduan;
use Illuminate\Database\Seeder;

class JenisPengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenispengaduan::create(['nama' => 'Aspirasi']);
        Jenispengaduan::create(['nama' => 'Saran']);
        Jenispengaduan::create(['nama' => 'Pengaduan']);

    }
}
