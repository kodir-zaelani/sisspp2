<?php

namespace Database\Seeders;

use App\Models\Jenishapusbuku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefHapusBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_hapus_buku.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenishapusbuku::create([
    			'jenis_hapus_buku_id'               => $obj->id,
    			'nama'       => $obj->ket_hapus_buku,
    			'u_prasarana' => $obj->u_prasarana,
    			'u_sarana'     => $obj->u_sarana,
    			'created_at'       => now(),
    			'updated_at'       => now(),
    		]);
    	}
    }
}