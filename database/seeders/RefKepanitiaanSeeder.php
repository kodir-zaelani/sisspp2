<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKepanitiaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_kepanitiaan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refkepanitiaan')->insert([
    			'id'         => $obj->id,
    			'nama' => $obj->nm_jns_panitia,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}
