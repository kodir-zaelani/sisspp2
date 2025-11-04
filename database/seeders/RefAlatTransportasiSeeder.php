<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alattransportasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefAlatTransportasiSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/alat_transportasi.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Alattransportasi::create([
                'alat_transportasi_id' => $obj->alat_transportasi_id,
                'nama'                 => $obj->nama,
                'created_at'           => now(),
                'updated_at'           => now(),
            ]);
        }
    }
}