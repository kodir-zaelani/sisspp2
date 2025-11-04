<?php

namespace Database\Seeders;

use App\Models\Bidangusaha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefBidangUsahaSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/bidang_usaha.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Bidangusaha::create([
                'bidang_usaha_id' => $obj->id,
                'nama'             => $obj->nama_bidang_usaha,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }
    }
}