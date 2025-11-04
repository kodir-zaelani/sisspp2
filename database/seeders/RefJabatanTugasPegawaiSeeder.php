<?php

namespace Database\Seeders;

use App\Models\Jabatantugasptk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefJabatanTugasPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/jabatan_tugas_ptk.json');
		$data = json_decode($json);
        foreach($data as $obj){
    		Jabatantugasptk::create([
    			'jabatan_tugasptk_id'                   => $obj->id,
    			'nama'                 => $obj->nama,
    			'jabatan_utama'        => $obj->jabatan_utama,
    			'tugas_tambahan_guru'  => $obj->tugas_tambahan_guru,
    			'jumlah_jam_diakui'    => $obj->jumlah_jam_diakui,
    			'harus_refer_unit_org' => $obj->harus_refer_unit_org,
    			'created_at' => now(),
    			'updated_at' => now(),
    		]);
    	}
    }
}