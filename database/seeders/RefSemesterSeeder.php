<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RefSemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/semester.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Semester::create([
                'semesterid'     => $obj->semester_id,
                'tahunajaran_id' => $obj->tahun_ajaran_id,
                'nama'            => $obj->nama,
                'semester'        => $obj->semester,
                'periode_aktif'   => $obj->periode_aktif,
                'tanggal_mulai'   => $obj->tanggal_mulai,
                'tanggal_selesai' => $obj->tanggal_selesai,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}