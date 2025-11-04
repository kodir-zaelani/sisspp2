<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jeniskesejahteraan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKesejahteraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_kesejahteraan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jeniskesejahteraan::create([
    			'jenis_kesejahteraan_id'         => $obj->id,
    			'nama' => $obj->nama,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}