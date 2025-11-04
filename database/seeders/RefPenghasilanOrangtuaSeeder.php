<?php

namespace Database\Seeders;

use App\Models\Penghasilanortu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefPenghasilanOrangtuaSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/penghasilan_orangtua_wali.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Penghasilanortu::create([
                'penghasilan_ortu_id' => $obj->id,
                'nama'                => $obj->nama,
                'batas_bawah'         => $obj->batas_bawah,
                'batas_atas'          => $obj->batas_atas,
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}