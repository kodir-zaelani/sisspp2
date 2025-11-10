<?php

namespace App\Http\Controllers\Backend;

use App\Models\Jurusan;
use App\Models\Sekolah;
use App\Models\Jurusansp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class JurusanspController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('backend.jurusansp.index', [
            'title' => 'Daftar Jurusan Satuan Pendidikan'
        ]);

    }
    /**
    * Create the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function create()
    {
        return view('backend.jurusansp.create', [
            'sekolah' => Sekolah::orderBy('nama', 'asc')->get(),
            'jurusan' => Jurusan::orderBy('jurusanid', 'desc')->get(),
            'title' => 'Daftar Jurusan Satuan Pendidikan'
        ]);

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'sekolah_id' => 'required',
            'jurusan_id' => 'required',
            'nama'       => 'required',
        ]);

        // Default data
        $data = [
            'sekolah_id' => $request->input('sekolah_id'),
            'jurusan_id' => $request->input('jurusan_id'),
            'nama'       => $request->input('nama'),
        ];

        $jurusansp = Jurusansp::create($data);

        return redirect()->route('backend.jurusansp.index')->with(['success' => 'Add Jurusan SP was successfully!']);

    }

     /**
    * Get Jurusan.
    *
    * @return \Illuminate\Http\Response
    */
    public function getjurusansp($sekolah_id)
    {
        // menampilkan data menggunakan Query builder buka elequent
        $jurusansps = Jurusansp::where('sekolah_id', $sekolah_id)->get();
        return response()->json($jurusansps);
    }
}
