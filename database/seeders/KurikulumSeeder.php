<?php

namespace Database\Seeders;

use App\Models\Kurikulum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('kurikulum')->truncate();
		$json = File::get('database/data/kurikulum.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Kurikulum::create([
    			'kurikulumid' 			=> $obj->id,
    			'nama_kurikulum' 		=> $obj->nama_kurikulum,
				'mulai_berlaku'			=> $obj->mulai_berlaku,
				'sistem_sks'			=> $obj->sistem_sks,
				'total_sks'				=> $obj->total_sks,
				'jenjangpendidikan_id'	=> $obj->jenjang_pendidikan_id,
				'jurusanid'			=> $obj->jurusan_id,
    			'created_at' => now(),
                'updated_at' => now(),
    		]);
    	}
    }
}
