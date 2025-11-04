<?php

namespace Database\Seeders;

use App\Models\Jenisbeasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefBeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_beasiswa_uuid.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisbeasiswa::create([
    			'jenis_beasiswa_id'               => $obj->id,
    			'sumberdana_id' => $obj->sumber_dana_id,
    			'nama'             => $obj->nama,
    			'untuk_pd'         => $obj->untuk_pd,
    			'untuk_ptk'        => $obj->untuk_ptk,
    			'created_at'       => now(),
    			'updated_at'       => now(),
    		]);
    	}
    }
}