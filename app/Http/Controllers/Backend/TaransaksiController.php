<?php

namespace App\Http\Controllers\Backend;

use Mpdf\Mpdf;
use App\Models\Invoice;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaransaksiController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(): View
    {
        return view('backend.transaksi.index', [
            'title' => 'Transaksi'
        ]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function list(): View
    {
        return view('backend.transaksi.list', [
            'title' => 'Daftar Transaksi'
        ]);
    }


}
