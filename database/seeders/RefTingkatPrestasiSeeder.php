<?php

namespace Database\Seeders;

use App\Models\Tingkatprestasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefTingkatPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/tingkat_prestasi.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Tingkatprestasi::create([
    			'tingkat_prestasi_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}