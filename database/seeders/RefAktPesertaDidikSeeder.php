<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefAktPesertaDidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_akt_pd.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refaktpesertadidik')->insert([
    			'id'               => $obj->id,
    			'nama'             => $obj->nama,
    			'keterangan'         => $obj->keterangan,
    			'created_at'       => now(),
    			'updated_at'       => now(),
    		]);
    	}
    }
}
