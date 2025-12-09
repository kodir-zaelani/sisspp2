<?php

namespace App\Http\Controllers\Wali;

use App\Models\Pesertadidik;
use Illuminate\Http\Request;
use App\Models\Walimuridsekolah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaliDashboardController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        $user = Auth::id();
        $wali = Walimuridsekolah::where('user_id', $user)->first();
        $datapeseradidik = Pesertadidik::where('id', $wali->pesertadidik_id)->first();
        return view('wali.home.index', [
            'datapeseradidik' => $datapeseradidik,
            'title' => 'Wali Dashboard'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function commingsoon()
    {
        $user = Auth::id();
        $wali = Walimuridsekolah::where('user_id', $user)->first();
        return view('wali.home.commingsoon', [
            'datapeseradidik' => $wali,
            'title' => 'Pengembangan'
        ]);
    }
}
