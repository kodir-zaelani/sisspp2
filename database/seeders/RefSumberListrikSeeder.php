<?php

namespace Database\Seeders;

use App\Models\Sumberlistrik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefSumberListrikSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/sumber_listrik.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Sumberlistrik::create([
                'sumber_listrik_id' => $obj->id,
                'nama'              => $obj->nama,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}