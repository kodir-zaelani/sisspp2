<?php

namespace Database\Seeders;

use App\Models\Sumberair;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefSumberAirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/sumber_air.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Sumberair::create([
    			'sumber_air_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}