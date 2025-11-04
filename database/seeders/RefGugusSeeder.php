<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefGugusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_gugus.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refgugus')->insert([
    			'id'        => $obj->id,
    			'nama'      => $obj->jenis_gugus,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
