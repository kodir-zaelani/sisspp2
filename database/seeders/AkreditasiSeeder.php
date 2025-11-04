<?php

namespace Database\Seeders;

use App\Models\Akreditasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkreditasiSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $json = File::get('database/data_json/akreditasi.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        //     DB::table('ref_akreditasis')->insert([
        //         'title'       => $obj->nama,
        //         'created_at' => $obj->created_at,
        //         'updated_at' => $obj->last_update,
        //         'deleted_at' => $obj->deleted_at,
        //     ]);
        // }


        foreach($data as $obj){
            Akreditasi::create([
                'sort_akreditasi'       => $obj->id,
                'nama'       => $obj->nama,
                'created_at' => $obj->create_date,
                'updated_at' => $obj->last_update,
                'deleted_at' => $obj->expired_date,
            ]);
        }
    }
}