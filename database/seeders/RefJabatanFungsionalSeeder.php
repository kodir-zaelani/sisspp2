<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatanfungsional;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefJabatanFungsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jabatan_fungsional.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jabatanfungsional::create([
    			'jabatan_fungsional_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}