<?php

namespace Database\Seeders;

use App\Models\Alasanlayakpip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefAlasanlayakPIPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/alasan_layak_pip.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Alasanlayakpip::create([
    			'id_layak_pip'           => $obj->id,
    			'alasan' => $obj->alasan_layak,
    			'created_at'   => now(),
    			'updated_at'   => now(),
    		]);
    	}
    }
}