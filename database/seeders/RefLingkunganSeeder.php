<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefLingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_lk.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('reflingkungan')->insert([
    			'id'         => $obj->id,
    			'nama'       => $obj->nm_jenis_lk,
    			'keterangan' => $obj->ket_jenis_lk,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}
