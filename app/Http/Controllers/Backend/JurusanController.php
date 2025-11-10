<?php

namespace App\Http\Controllers\Backend;

use App\Models\Jurusan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    /**
    * __middleware
    *
    * @return void
    */

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:jurusan.index|jurusan.create|jurusan.edit|jurusan.delete|jurusan.trash',
        ];
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(): View
    {
        return view('backend.jurusan.index', [
            'title' => 'Jurusan'
        ]);
    }

    /**
    * Get Jurusan.
    *
    * @return \Illuminate\Http\Response
    */
    public function getjurusan($jurusan_id)
    {
        // menampilkan data menggunakan Query builder buka elequent
        $jurusan = Jurusan::where('id', $jurusan_id)->first();
        $nama_jurusan = $jurusan->nama_jurusan;
        return response()->json($nama_jurusan);
    }
}
