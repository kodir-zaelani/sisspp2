<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenispenghargaan;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_penghargaan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenispenghargaan::create([
    			'jenis_penghargaan_id'         => $obj->jenis_penghargaan_id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}