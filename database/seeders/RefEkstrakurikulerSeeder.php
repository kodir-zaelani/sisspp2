<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefEkstrakurikulerSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/ekstra_kurikuler.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Ekstrakurikuler::create([
                'ekstra_kurikuler_id' => $obj->id,
                'nama'               => $obj->nama,
                'u_sd'               => $obj->u_sd,
                'u_smp'              => $obj->u_smp,
                'u_sma'              => $obj->u_sma,
                'u_smk'              => $obj->u_smk,
                'created_at'         => now(),
                'updated_at'         => now(),
            ]);
        }
    }
}