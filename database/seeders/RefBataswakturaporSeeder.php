<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefBataswakturaporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/batas_waktu_rapor.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		DB::table('refbataswakturapor')->insert([
    			'semester_id'       => $obj->semester_id,
    			'tgl_rapor_mulai'   => $obj->tgl_rapor_mulai,
    			'tgl_rapor_selesai' => $obj->tgl_rapor_selesai,
    			'tgl_usm_mulai'     => $obj->tgl_usm_mulai,
    			'tgl_usm_selesai'   => $obj->tgl_usm_selesai,
    			'created_at'        => now(),
    			'updated_at'        => now(),
    		]);
    	}
    }
}
