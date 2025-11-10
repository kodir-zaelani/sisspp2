<?php

namespace App\Http\Controllers\Backend;

use App\Models\Ptk;
use App\Models\Sekolah;
use App\Models\Semester;
use App\Models\Jurusansp;
use Illuminate\Http\Request;
use App\Models\Rombonganbelajar;
use App\Models\Tingkatpendidikan;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RombonganbelajarController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('backend.rombonganbelajar.index', [
            'title' => 'Daftar Rombongan Belajar'
        ]);

    }
    /**
    * Create the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function create()
    {
        return view('backend.rombonganbelajar.create', [
            'sekolah' => Sekolah::orderBy('nama', 'asc')->get(),
            'semester' => Semester::orderBy('nama', 'desc')->get(),
            'tingkatpendidikan' => Tingkatpendidikan::orderBy('nama', 'asc')->get(),
            'jurusansp' => Jurusansp::all(),
            'ptks' => Ptk::all(),
            'title' => 'Daftar Rombongan Belajar'
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
            'sekolah_id'           => 'required',
            'jurusansp_id'         => 'required',
            'semester_id'          => 'required',
            'tingkatpendidikan_id' => 'required',
            'nama'                 => 'required|unique:rombonganbelajars,nama',
        ]);

        // Default data
        $data = [
            'sekolah_id'           => $request->input('sekolah_id'),
            'jurusansp_id'         => $request->input('jurusansp_id'),
            'semester_id'          => $request->input('semester_id'),
            'tingkatpendidikan_id' => $request->input('tingkatpendidikan_id'),
            'nama'                 => $request->input('nama'),
            'ptk_id'                 => $request->input('ptk_id'),
        ];

        // dd($data);
        $rombonganbelajaran = Rombonganbelajar::create($data);

        return redirect()->route('backend.rombonganbelajar.index')->with(['success' => 'Add Rombonganbelajar ' . $rombonganbelajaran['nama'] . ' was successfully!']);

    }
}
