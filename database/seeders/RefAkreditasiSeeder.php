<?php

namespace Database\Seeders;

use App\Models\RefAkreditasi;
use Illuminate\Database\Seeder;

class RefAkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        RefAkreditasi::create([
            'id' => '1',
            'nama' => 'A',
            ]);
        RefAkreditasi::create([
            'id' => '2',
            'nama' => 'B',
            ]);
        RefAkreditasi::create([
            'id' => '3',
            'nama' => 'C',
            ]);
        RefAkreditasi::create([
            'id' => '8',
            'nama' => 'Tidak Terakreditasi',
            ]);
        RefAkreditasi::create([
            'id' => '9',
            'nama' => 'Belum Akreditasi',
            ]);
    }
}
