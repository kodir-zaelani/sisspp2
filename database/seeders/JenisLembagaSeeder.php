<?php

namespace Database\Seeders;

use App\Models\Jenislembaga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisLembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/jenis_lembaga.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenislembaga::create([
    			'jenis_lembaga_id'         => $obj->jenis_lembaga_id,
    			'nama'       => $obj->nama,
    			'tempat_pengawas'       => $obj->tempat_pengawas,
    			'simpul_pendataan'       => $obj->simpul_pendataan,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}