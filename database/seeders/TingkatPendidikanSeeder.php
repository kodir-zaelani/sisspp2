<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tingkatpendidikan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TingkatPendidikanSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data_json/tingkat_pendidikan_uuid.json');
        $data = json_decode($json);
        // foreach($data as $obj){
        //     DB::table('tingkatpendidikan')->insert([
        //         'id' => $obj->tingkat_pendidikan_id,
        //         'kode' => $obj->kode,
        //         'nama' => $obj->nama,
        //         'jenjangpendidikan_id' => $obj->jenjang_pendidikan_id,
        //         'created_at' 			=> $obj->create_date,
        //         'updated_at' 			=> $obj->last_update,
        //     ]);
        // }

        foreach($data as $obj){
            Tingkatpendidikan::create([
                'tingkat_pendidikan_id' => $obj->tingkat_pendidikan_id,
                'kode'                   => $obj->kode,
                'nama'                   => $obj->nama,
                'jenjangpendidikan_id'   => $obj->jenjang_pendidikan_id,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}