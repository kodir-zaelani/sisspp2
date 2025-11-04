<?php

namespace Database\Seeders;

use App\Models\Jenisbantuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefJenisBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_bantuan.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisbantuan::create([
    			'jenis_bantuan_id'            => $obj->id,
    			'nama'          => $obj->nama,
    			'untuk_sekolah' => $obj->untuk_sekolah,
    			'untuk_pd'      => $obj->untuk_pd,
    			'created_at'    => now(),
    			'updated_at'    => now(),
    		]);
    	}
    }
}
