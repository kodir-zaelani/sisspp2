<?php

namespace Database\Seeders;

use App\Models\Sumberdana;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefSumberDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/sumber_dana.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Sumberdana::create([
    			'sumber_dana_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}