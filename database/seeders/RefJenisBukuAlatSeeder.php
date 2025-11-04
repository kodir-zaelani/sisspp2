<?php

namespace Database\Seeders;

use App\Models\Jenisbukualat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefJenisBukuAlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jenis_buku_alat.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jenisbukualat::create([
    			'jenis_buku_alat_id'                      => $obj->id,
    			'nama'                    => $obj->jenis_buku_alat,
    			'spm_qty_min_per_siswa'   => $obj->spm_qty_min_per_siswa,
    			'spm_qty_min_per_sekolah' => $obj->spm_qty_min_per_sekolah,
    			'created_at'              => now(),
    			'updated_at'              => now(),
    		]);
    	}
    }
}