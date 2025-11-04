<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/pekerjaan.json');
		$data = json_decode($json);
        foreach($data as $obj){
            Pekerjaan::create([
                'pekerjaanid' => $obj->id,
                'nama'              => $obj->nama,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}