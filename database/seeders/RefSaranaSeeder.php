<?php

namespace Database\Seeders;

use App\Models\Jenissarana;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefSaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_sarana.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenissarana::create([
    			'jenis_sarana_id'               => $obj->id,
    			'nama'             => $obj->nama,
    			'kelompok'         => $obj->kelompok,
    			'perlu_penempatan' => $obj->perlu_penempatan,
    			'keterangan'       => $obj->keterangan,
    			'created_at'       => now(),
    			'updated_at'       => now(),
    		]);
    	}
    }
}