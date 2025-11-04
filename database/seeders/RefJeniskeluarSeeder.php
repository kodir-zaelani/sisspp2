<?php

namespace Database\Seeders;

use App\Models\Jeniskeluar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RefJeniskeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/jenis_keluar.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Jeniskeluar::create([
                'jenis_keluar_id' => $obj->id,
                'keterangan'      => $obj->ket_keluar,
                'keluar_pd'       => $obj->keluar_pd,
                'keluar_ptk'      => $obj->keluar_ptk,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}
