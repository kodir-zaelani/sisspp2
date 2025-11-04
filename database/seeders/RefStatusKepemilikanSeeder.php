<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statuskepemilikan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefStatusKepemilikanSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/status_kepemilikan.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        //     DB::table('refsetatuskepemilikan')->insert([
        //         'id'         => $obj->id,
        //         'nama'       => $obj->nama,
        //         'created_at'   => now(),
        //         'updated_at'   => now(),
        //     ]);
        // }

        foreach($data as $obj){
            Statuskepemilikan::create([
                'status_kepemilikan_id' => $obj->id,
                'nama'       => $obj->nama,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }


}