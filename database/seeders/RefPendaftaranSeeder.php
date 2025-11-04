<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenispendaftaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_pendaftaran.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenispendaftaran::create([
    			'jenis_pendaftaran_id'             => $obj->id,
    			'nama'           => $obj->nama,
    			'daftar_sekolah' => $obj->daftar_sekolah,
    			'daftar_rombel'  => $obj->daftar_rombel,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}