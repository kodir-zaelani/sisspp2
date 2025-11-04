<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKelompokUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/kelompok_usaha.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refkelompokusaha')->insert([
    			'id'         => $obj->id,
    			'nama'       => $obj->nama_kelompok_usaha,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
