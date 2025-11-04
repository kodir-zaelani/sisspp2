<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Kebutuhankhusus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RefKebutuhanKhususSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $json = File::get('database/data_json/kebutuhan_khusus_1.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Kebutuhankhusus::create([
                'kebutuhan_khusus_id' => $obj->kebutuhan_khusus_id,
                'kebutuhan_khusus'    => $obj->kebutuhan_khusus,
                'slug'                => Str::slug($obj->kebutuhan_khusus),
                'kk_a'                => $obj->kk_a,
                'kk_b'                => $obj->kk_b,
                'kk_c'                => $obj->kk_c,
                'kk_c1'               => $obj->kk_c1,
                'kk_d'                => $obj->kk_d,
                'kk_d1'               => $obj->kk_d1,
                'kk_e'                => $obj->kk_e,
                'kk_f'                => $obj->kk_f,
                'kk_h'                => $obj->kk_h,
                'kk_j'                => $obj->kk_j,
                'kk_i'                => $obj->kk_i,
                'kk_k'                => $obj->kk_k,
                'kk_n'                => $obj->kk_n,
                'kk_o'                => $obj->kk_o,
                'kk_p'                => $obj->kk_p,
                'kk_q'                => $obj->kk_q,
                'untuk_lembaga'       => $obj->untuk_lembaga,
                'untuk_ptk'           => $obj->untuk_ptk,
                'untuk_pd'            => $obj->untuk_pd,
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}
