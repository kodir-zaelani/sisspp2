<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Statuskepemilikansarpras;

class RefStatusKepemilikanSarprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/status_kepemilikan_sarpras.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Statuskepemilikansarpras::create([
    			'status_kepemilikan_sarpras_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
