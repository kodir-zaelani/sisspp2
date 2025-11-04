<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefStatusdiKUrikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/status_di_kurikulum.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refsetatusdikurikulum')->insert([
    			'id'         => $obj->id,
    			'status_dikurikulum'       => $obj->ket_stat_di_kurikulum,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
