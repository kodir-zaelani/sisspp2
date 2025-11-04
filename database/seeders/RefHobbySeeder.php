<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefHobbySeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/jenis_hobby.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Hobby::create([
                'id_hobby'   => $obj->id,
                'nama'       => $obj->nm_hobby,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}