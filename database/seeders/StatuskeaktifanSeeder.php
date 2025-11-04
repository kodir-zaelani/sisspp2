<?php

namespace Database\Seeders;

use App\Models\Statuskeaktifan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Database\Seeders\StatuskeaktifanSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatuskeaktifanSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        DB::table('statuskeaktifans')->truncate();
        $json = File::get('database/data_json/status_kepegawaian.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        //     DB::table('agama')->insert([
        //         'agama_id'   => $obj->id,
        //         'nama'       => $obj->nama,
        //         'created_at' => $obj->created_at,
        //         'updated_at' => $obj->updated_at,
        //         'deleted_at' => $obj->deleted_at,
        //     ]);
        // }

        foreach($data as $obj){
            Statuskeaktifan::create([
                'status_keaktifan_id'   => $obj->status_kepegawaian_id,
                'nama'       => $obj->nama,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
