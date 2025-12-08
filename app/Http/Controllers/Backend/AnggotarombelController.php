<?php

namespace App\Http\Controllers\Backend;

use App\Models\Semester;
use App\Models\Tahunajaran;
use Illuminate\Http\Request;
use App\Models\Rombonganbelajar;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AnggotarombelController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('backend.anggotarombel.index', [
            'title' => 'Anggota Rombongan Belajar'
        ]);

    }

    /**
    * Create the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function create()
    {
        return view('backend.anggotarombel.create', [
            'title' => 'Anggota Rombongan Belajar'
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
            'tahunajaran_id'           => 'required',
            'semester_id'          => 'required',
            'rombonganbelajar_id' => 'required',
            'pesertadidisk_id'                 => 'required',
        ]);

        // Default data
        $data = [
            // 'sekolah_id'           => $request->input('sekolah_id'),
            // 'jurusansp_id'         => $request->input('jurusansp_id'),
            // 'semester_id'          => $request->input('semester_id'),
            // 'tingkatpendidikan_id' => $request->input('tingkatpendidikan_id'),
            // 'nama'                 => $request->input('nama'),
            // 'ptk_id'                 => $request->input('ptk_id'),
        ];

        // dd($data);
        $anggotarombel = Anggotarombel::create($data);

        return redirect()->route('backend.anggotarombel.index')->with(['success' => 'Add Anggotarombel was successfully!']);

    }
}
