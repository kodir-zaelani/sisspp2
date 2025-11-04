<?php

namespace Database\Seeders;

use App\Models\Matapelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('mata_pelajaran')->truncate();
		$json = File::get('database/data/mata_pelajaran.json');
		$data = json_decode($json);
        foreach($data as $obj){
			Matapelajaran::create([
				'mata_pelajaran_id' 	=> $obj->id,
				'nama' 					=> $obj->nama,
				'pilihan_sekolah'		=> $obj->pilihan_sekolah,
				'pilihan_buku' 			=> $obj->pilihan_buku,
				'pilihan_kepengawasan'	=> $obj->pilihan_kepengawasan,
				'pilihan_evaluasi'		=> $obj->pilihan_evaluasi,
				'jurusanid'			=> $obj->jurusan_id,
				'created_at' => now(),
                'updated_at' => now(),
			]);
    	}
    }
}