<?php

namespace Database\Seeders;

use App\Models\LingkupPengaduan;
use Illuminate\Database\Seeder;

class LingkupPengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LingkupPengaduan::create([
            'nama' => 'Kurikulum Sekolah',
            'urut' => 1,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Kelulusan Peserta  Didik',
            'urut' => 2,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Kegiatan Proses Pembelajaran',
            'urut' => 3,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Penilaian Pembelajaran ( Hasil Belajar )',
            'urut' => 4,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Pengelolaan Sekolah ( Manajemen Sekolah)',
            'urut' => 5,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Sarana Dan Prasarana Sekolah',
            'urut' => 6,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Guru  Dan Tenaga Administrasi',
            'urut' => 7,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Pembiayaan  Sekolah',
            'urut' => 8,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Budaya Dan Lingkungan Sekolah',
            'urut' => 9,
            ]);
        LingkupPengaduan::create([
            'nama' => 'Penerimaan Peserta Didik Baru (PDDB)',
            'urut' => 10,
            ]);
    }
}
