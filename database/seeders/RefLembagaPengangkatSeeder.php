<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembagapengangkat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefLembagaPengangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/lembaga_pengangkat.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Lembagapengangkat::create([
    			'lembaga_pengangkat_id'         => $obj->id,
    			'nama' => $obj->nama,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}