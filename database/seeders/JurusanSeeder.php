<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$json = File::get('database/data/jurusan.json');
		$data = json_decode($json);
        foreach($data as $obj){
			Jurusan::create([
				'jurusanid' 			=> trim($obj->jurusan_id),
				'nama_jurusan' 			=> $obj->nama_jurusan,
				'untuk_sma'				=> $obj->untuk_sma,
				'untuk_smk'				=> $obj->untuk_smk,
				'untuk_pt'				=> $obj->untuk_pt,
				'untuk_slb'				=> $obj->untuk_slb,
				'untuk_smklb'			=> $obj->untuk_smklb,
				'jenjangpendidikan_id'	=> $obj->jenjangpendidikan_id,
				'jurusan_induk'			=> $obj->jurusan_induk,
				'level_bidang_id'		=> $obj->level_bidang_id,
				'created_at'      => now(),
                'updated_at'      => now(),
			]);
    	}
    }
}