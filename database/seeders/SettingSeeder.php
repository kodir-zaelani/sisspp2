<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'webname'            => 'Sistem Informasi SPP',
            'email'              => 'admin@email.com',
            'tagline'            => 'Berkarya',
            'phone'              => '082159888845',
            'status_site_update' => '1',
        ]);
    }
}