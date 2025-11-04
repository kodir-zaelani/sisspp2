<?php

namespace Database\Seeders;

use App\Models\Mapelkurikulum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Mata_pelajaran_kurikulumSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //DB::table('mata_pelajaran_kurikulum')->truncate();
        // $sql = File::get('database/data/mata_pelajaran_kurikulum.sql');
        // DB::unprepared($sql);

        $json = File::get('database/data_json/mata_pelajaran_kurikulum.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Mapelkurikulum::create([
                'kurikulum_id'          => $obj->kurikulum_id,
                'mata_pelajaran_id'     => $obj->mata_pelajaran_id,
                'tingkat_pendidikan_id' => $obj->tingkat_pendidikan_id,
                'jumlah_jam'            => $obj->jumlah_jam,
                'jumlah_jam_maksimum'   => $obj->jumlah_jam_maksimum,
                'wajib'                 => $obj->wajib,
                'sks'                   => $obj->sks,
                'a_peminatan'           => $obj->a_peminatan,
                'area_kompetensi'       => $obj->area_kompetensi,
                'gmp_id'                => $obj->gmp_id,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);
        }

    }
}