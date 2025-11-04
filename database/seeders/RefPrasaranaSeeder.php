<?php

namespace Database\Seeders;

use App\Models\Jenisprasarana;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_prasarana.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisprasarana::create([
    			'jenis_prasarana_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'a_unit_organisasi'       => $obj->a_unit_organisasi,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}