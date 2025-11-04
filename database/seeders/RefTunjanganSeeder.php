<?php

namespace Database\Seeders;

use App\Models\Jenistunjangan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefTunjanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_tunjangan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenistunjangan::create([
    			'jenis_tunjangan_id'         => $obj->id,
    			'nama'       => $obj->nama,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}
