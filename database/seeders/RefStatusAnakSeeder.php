<?php

namespace Database\Seeders;

use App\Models\Statusanak;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefStatusAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/status_anak.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Statusanak::create([
    			'status_anak_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
