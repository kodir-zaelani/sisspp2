<?php

namespace App\Http\Controllers\Wali;

use Illuminate\View\View;
use App\Models\Pesertadidik;
use Illuminate\Http\Request;
use App\Models\Walimuridsekolah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaliPesertadidikController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(): View
    {
        // $user = Auth::id();
        // $wali = Walimuridsekolah::where('user_id', $user)->first();
        // $datapeseradidik = Pesertadidik::where('id', $wali->pesertadidik_id)
        // ->with('agama', 'sekolah','tahunajaran', 'jenistinggal', 'kebutuhankhusus', 'jenispendaftaran',
        // 'semester', 'tingkatpendidikan', 'alattransportasi', 'jenjangpendidikan_ayah',
        // 'pekerjaan_ayah', 'penghasilan_ayah', 'jenjangpendidikan_ibu', 'pekerjaan_ibu',
        // 'penghasilan_ibu', 'jenjangpendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali',
        // 'statuspotonganspp')->first();
        return view('wali.pesertadidik.index', [
            'title' => 'Peserta Didik'
        ]);
    }
}