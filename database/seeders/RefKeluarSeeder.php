<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_keluar.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refkeluar')->insert([
    			'id'         => $obj->id,
    			'keterangan' => $obj->ket_keluar,
    			'untuk_pd'   => $obj->keluar_pd,
    			'untuk_ptk'  => $obj->keluar_ptk,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}
