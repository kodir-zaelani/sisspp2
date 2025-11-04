<?php

namespace Database\Seeders;

use App\Models\Jenisprestasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_prestasi.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisprestasi::create([
    			'jenis_prestasi_id'             => $obj->id,
    			'nama'           => $obj->nama,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}