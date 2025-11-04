<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tingkatpenghargaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefTingkatPenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/tingkat_penghargaan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Tingkatpenghargaan::create([
    			'tingkat_penghargaan_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
