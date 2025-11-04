<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPemakaiPrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/pemakai_prasarana.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refpemakaiprasarana')->insert([
    			'refprasarana_id' => $obj->refprasarana_id,
    			'jurusan_id'      => $obj->jurusan_id,
    			'created_at'      => now(),
    			'updated_at'      => now(),
    		]);
    	}
    }
}
