<?php

namespace Database\Seeders;

use App\Models\Statuskepegawaian;
use Illuminate\Database\Seeder;

class StatusKepegawaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statuskepegawaian::create([
            'id' => '1',
            'nama' => 'PNS',
        ]);
        Statuskepegawaian::create([
            'id' => '2',
            'nama' => 'PNS Diperbantukan',
        ]);
        Statuskepegawaian::create([
            'id' => '3',
            'nama' => 'PNS Depag',
        ]);
        Statuskepegawaian::create([
            'id' => '4',
            'nama' => 'GTY/PTY',
        ]);
        Statuskepegawaian::create([
            'id' => '5',
            'nama' => 'Honor Daerah TK.I Provinsi',
        ]);
        Statuskepegawaian::create([
            'id' => '6',
            'nama' => 'Honor Daerah TK.II Kab/Kota',
        ]);
        Statuskepegawaian::create([
            'id' => '7',
            'nama' => 'Guru Bantu Pusat',
        ]);
        Statuskepegawaian::create([
            'id' => '8',
            'nama' => 'Guru Honor Sekolah',
        ]);
        Statuskepegawaian::create([
            'id' => '9',
            'nama' => 'Tenaga Honor Sekolah',
        ]);
        Statuskepegawaian::create([
            'id' => '10',
            'nama' => 'CPNS',
        ]);
        Statuskepegawaian::create([
            'id' => '51',
            'nama' => 'Kontrak Kerja WNA',
        ]);
        Statuskepegawaian::create([
            'id' => '99',
            'nama' => 'Lainnya',
        ]);
    }
}
