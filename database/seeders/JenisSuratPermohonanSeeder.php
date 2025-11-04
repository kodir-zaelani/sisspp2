<?php

namespace Database\Seeders;

use App\Models\JenisSuratPermohonan;
use Illuminate\Database\Seeder;

class JenisSuratPermohonanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSuratPermohonan::create([
            'nama'               => 'Surat Tugas',
            'untuk_pegawai'      => 1,
            'untuk_pesertadidik' => 1,
        ]);
        JenisSuratPermohonan::create([
            'nama'               => 'Rekomendasi Mengikuti Lomba',
            'untuk_pegawai'      => 1,
            'untuk_pesertadidik' => 1,
        ]);
        JenisSuratPermohonan::create([
            'nama'               => 'Surat Keterangan Aktif Sekolah',
            'untuk_pegawai'      => 1,
            'untuk_pesertadidik' => 1,
        ]);
        JenisSuratPermohonan::create([
            'nama'               => 'Surat Rekomendasi Mutasi Keluar',
            'untuk_pegawai'      => 1,
            'untuk_pesertadidik' => 1,
        ]);
        JenisSuratPermohonan::create([
            'nama'               => 'Surat Rekomendasi Mutasi Masuk',
            'untuk_pegawai'      => 1,
            'untuk_pesertadidik' => 1,
        ]);
    }
}
