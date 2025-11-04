<?php

namespace Database\Seeders;

use App\Models\Gelarakademik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefGelarAkademikSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/gelar_akademik.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Gelarakademik::create([
                'gelar_akademik_id' => $obj->id,
                'kode'              => $obj->kode,
                'nama'              => $obj->nama,
                'posisi_gelar'      => $obj->posisi_gelar,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}