<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bentukpendidikan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BentukPendidikanSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/bentuk_pendidikan.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        //     DB::table('bentukpendidikan')->insert([
        //         'id' => $obj->id,
        //         'nama' => $obj->nama,
        //         'jenjang_paud' => $obj->jenjang_paud,
        //         'jenjang_tk' => $obj->jenjang_tk,
        //         'jenjang_sd' => $obj->jenjang_sd,
        //         'jenjang_smp' => $obj->jenjang_smp,
        //         'jenjang_sma' => $obj->jenjang_sma,
        //         'jenjang_tinggi' => $obj->jenjang_tinggi,
        //         'direktorat_pembinaan' => $obj->direktorat_pembinaan,
        //         'aktif'   => $obj->aktif,
        //         'created_at' 			=> $obj->create_date,
        //         'updated_at' 			=> $obj->last_update,
        //     ]);
        // }

        foreach($data as $obj){
            Bentukpendidikan::create([
                'bentuk_pendidikan_id' => $obj->id,
                'nama'                   => $obj->nama,
                'jenjang_paud'           => $obj->jenjang_paud,
                'jenjang_tk'             => $obj->jenjang_tk,
                'jenjang_sd'             => $obj->jenjang_sd,
                'jenjang_smp'            => $obj->jenjang_smp,
                'jenjang_sma'            => $obj->jenjang_sma,
                'jenjang_tinggi'         => $obj->jenjang_tinggi,
                'direktorat_pembinaan'   => $obj->direktorat_pembinaan,
                'aktif'                  => $obj->aktif,
                'created_at'             => $obj->create_date,
                'updated_at'             => $obj->last_update,
            ]);
        }
    }

}