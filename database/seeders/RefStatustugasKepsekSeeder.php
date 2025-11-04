<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefStatustugasKepsekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //DB::table('refstatustugaskepsek')->truncate();
		$json = File::get('database/data/status_tugas_kepsek.json');
		$data = json_decode($json);
        foreach($data as $obj){
			DB::table('refstatustugaskepsek')->insert([
				'id'           => $obj->id,
				'status_tugas' => $obj->status_tugas,
				'created_at'   => now(),
				'updated_at'   => now(),
			]);
    	}
    }
}
