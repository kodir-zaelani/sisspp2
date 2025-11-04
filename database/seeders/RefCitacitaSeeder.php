<?php

namespace Database\Seeders;

use App\Models\Citacita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefCitacitaSeeder extends Seeder
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
    		Citacita::create([
    			'cita_cita_id'         => $obj->id,
    			'nama'       => $obj->nm_cita,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}