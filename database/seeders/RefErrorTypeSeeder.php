<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefErrorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_cita.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refekstrakurikuler')->insert([
    			'id'        => $obj->id,
    			'nama'      => $obj->nm_ekskul,
    			'untuk_sd'  => $obj->u_sd,
    			'untuk_smp' => $obj->u_smp,
    			'untuk_sma' => $obj->u_sma,
    			'untuk_smk' => $obj->u_smk,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
