<?php

namespace App\Providers;

use App\Models\Pesertadidik;
use App\Models\Walimuridsekolah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewAuthwaliServiceProvider extends ServiceProvider
{
    /**
    * Register services.
    */
    public function register(): void
    {
        //
    }

    /**
    * Bootstrap services.
    */
    public function boot(): void
    {
        View::composer(['*'], function ($view) {
            $user = Auth::id();
            $wali = Walimuridsekolah::where('user_id', $user)->first();
            $datapeseradidik_global = Pesertadidik::where('id', $wali->pesertadidik_id)
            ->with('agama', 'sekolah','tahunajaran', 'jenistinggal', 'kebutuhankhusus', 'jenispendaftaran',
            'semester', 'tingkatpendidikan', 'alattransportasi', 'jenjangpendidikan_ayah',
            'pekerjaan_ayah', 'penghasilan_ayah', 'jenjangpendidikan_ibu', 'pekerjaan_ibu',
            'penghasilan_ibu', 'jenjangpendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali',
            'statuspotonganspp')->first();
            if (!empty($datapeseradidik_global)) {
                $view->with('datapeseradidik_global', $datapeseradidik_global);
            } else {
                $view->with('datapeseradidik_global', '0');
            }
        });
    }
}