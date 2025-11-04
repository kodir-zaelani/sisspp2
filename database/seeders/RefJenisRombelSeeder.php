<?php

namespace Database\Seeders;

use App\Models\Jenisrombel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefJenisRombelSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/jenis_rombel.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        // 	DB::table('refjenisrombel')->insert([
        // 		'id'             => $obj->id,
        // 		'nama'           => $obj->nama,
        // 		'created_at' => now(),
        // 		'updated_at' => now(),
        // 	]);
        // }

        foreach($data as $obj){
            Jenisrombel::create([
                'jenisrombelid' => $obj->id,
                'nama'           => $obj->nama,
                'slug'           => Str::slug($obj->nama),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}