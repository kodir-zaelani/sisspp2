<?php

namespace Database\Seeders;

use App\Models\Jenisdiklat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefDiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_diklat.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisdiklat::create([
    			'jenis_diklat_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
