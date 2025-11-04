<?php

namespace Database\Seeders;

use App\Models\RefAlasanIzin;
use Illuminate\Database\Seeder;

class RefAlasanIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefAlasanIzin::create(['nama'=> 'Izin']);

    }
}
