<?php

namespace Database\Seeders;

use App\Models\Aksesinternet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefAksesInternetSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data/akses_internet.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Aksesinternet::create([
                'akses_internet_id' => $obj->id,
                'nama'              => $obj->nama,
                'media'             => $obj->media,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}