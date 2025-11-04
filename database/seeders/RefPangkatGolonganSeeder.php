<?php

namespace Database\Seeders;

use App\Models\Pangkatgolongan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPangkatGolonganSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/pangkat_golongan.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Pangkatgolongan::create([
                'pangkat_golongan_id' => $obj->id,
                'kode'                => $obj->kode,
                'nama'                => $obj->nama,
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}
