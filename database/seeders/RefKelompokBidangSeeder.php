<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKelompokBidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/kelompok_bidang.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refkelompokbidang')->insert([
    			'id'       => $obj->id,
    			'nama_level_bidang'   => $obj->nama_level_bidang,
    			'untuk_sma' => $obj->untuk_sma,
    			'untuk_smk'     => $obj->untuk_smk,
    			'untuk_pt'   => $obj->untuk_pt,
    			'untuk_slb'   => $obj->untuk_slb,
    			'untuk_smklb'   => $obj->untuk_smklb,
    			'induk_id'   => $obj->induk_id,
    			'created_at'        => now(),
    			'updated_at'        => now(),
    		]);
    	}
    }
}
