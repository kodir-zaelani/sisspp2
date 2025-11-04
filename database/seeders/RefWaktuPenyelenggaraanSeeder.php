<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Waktupenyelenggaraan;
use Illuminate\Support\Facades\File;

class RefWaktuPenyelenggaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/waktu_penyelenggaraan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Waktupenyelenggaraan::create([
    			'waktu_penyelenggaraan_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
