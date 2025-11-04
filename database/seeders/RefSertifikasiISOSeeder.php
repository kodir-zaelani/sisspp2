<?php

namespace Database\Seeders;

use App\Models\Sertifikasiiso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RefSertifikasiISOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/sertifikasi_iso.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Sertifikasiiso::create([
    			'sertifikasi_iso_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
