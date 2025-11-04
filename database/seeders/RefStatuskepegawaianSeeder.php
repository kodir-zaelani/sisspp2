<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statuskepegawaian;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RefStatuskepegawaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/status_kepegawaian.json');
        $data = json_decode($json);
        foreach($data as $obj){
            Statuskepegawaian::create([
                'status_kepegawaian_id' => $obj->status_kepegawaian_id,
                'nama'                => $obj->nama,
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }
}