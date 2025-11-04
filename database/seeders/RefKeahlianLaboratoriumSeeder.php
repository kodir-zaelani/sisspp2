<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKeahlianLaboratoriumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/keahlian_laboratorium.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refkeahlianlaboratorium')->insert([
    			'id'                      => $obj->id,
    			'nama'                    => $obj->nama,
    			'created_at'              => now(),
    			'updated_at'              => now(),
    		]);
    	}
    }
}
