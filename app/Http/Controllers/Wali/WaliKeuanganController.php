<?php

namespace App\Http\Controllers\Wali;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaliKeuanganController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(): View
    {
        return view('wali.keuangan.index', [
            'title' => 'Keuangan'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function orderbayar(): View
    {
        return view('wali.keuangan.orderbayar', [
            'title' => 'Order Bayar'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function pembayaran(): View
    {
        return view('wali.keuangan.pembayaran', [
            'title' => 'Pembayaran'
        ]);
    }
}
