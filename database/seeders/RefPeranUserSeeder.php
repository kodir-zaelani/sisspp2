<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPeranUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/peran.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refperanuser')->insert([
    			'id'             => $obj->id,
    			'nama'           => $obj->nama,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}
