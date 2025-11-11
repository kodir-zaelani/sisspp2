<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertadidikController extends Controller
{
    public function index(){
        return view('backend.pesertadidik.index',[
            'title' => 'Peserta Didik'
        ]);
    }
}
