<?php

namespace Database\Seeders;

use App\Models\Bidangstudi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefBidangStudiSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data_json/bidang_studi.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Bidangstudi::create([
                'bidang_studi_id'       => $obj->bidang_studi_id,
                'kelompok_bidang_studi' => $obj->kelompok_bidang_studi_id,
                'kode'                  => $obj->kode,
                'nama'                  => $obj->bidang_studi,
                'kelompok'              => $obj->kelompok,
                'jenjang_paud'          => $obj->jenjang_paud,
                'jenjang_tk'            => $obj->jenjang_tk,
                'jenjang_sd'            => $obj->jenjang_sd,
                'jenjang_smp'           => $obj->jenjang_smp,
                'jenjang_sma'           => $obj->jenjang_sma,
                'jenjang_tinggi'        => $obj->jenjang_tinggi,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);
        }
    }
}