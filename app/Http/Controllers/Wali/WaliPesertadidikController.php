<?php

namespace App\Http\Controllers\Wali;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaliPesertadidikController extends Controller
{
     /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(): View
    {
        return view('wali.pesertadidik.index', [
            'title' => 'Peserta Didik'
        ]);
    }
}
