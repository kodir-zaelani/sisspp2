<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembagaakreditasi;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LembagaakreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $json = File::get('database/data/lembaga_akreditasi.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Lembagaakreditasi::create([
    			'lembaga_akreditasi_id'         => $obj->la_id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
