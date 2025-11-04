<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefStandarsaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/standar_sarana.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refstandarsarana')->insert([
    			'id'                  => $obj->id,
    			'refprasarana_id'     => $obj->refprasarana_id,
    			'refjenissarana_id'   => $obj->refjenissarana_id,
    			'jurusan_id'          => $obj->jurusan_id,
    			'bentukpendidikan_id' => $obj->bentukpendidikan_id,
    			'a_harus_ada'         => $obj->a_harus_ada,
    			'created_at'          => now(),
    			'updated_at'          => now(),
    		]);
    	}
    }
}
