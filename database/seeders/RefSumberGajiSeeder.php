<?php

namespace Database\Seeders;

use App\Models\Sumbergaji;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefSumberGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/sumber_gaji.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Sumbergaji::create([
    			'sumber_gaji_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
