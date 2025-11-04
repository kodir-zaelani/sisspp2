<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data_json/bank.json');
        $data = json_decode($json);

        foreach($data as $obj){
            Bank::create([
                'bankid'    => $obj->id_bank,
                'nama'       => $obj->nm_bank,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}