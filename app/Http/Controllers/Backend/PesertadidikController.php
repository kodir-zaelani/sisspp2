<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sekolah;
use App\Models\Semester;
use Illuminate\View\View;
use App\Models\Tahunajaran;
use App\Models\Pesertadidik;
use Illuminate\Http\Request;
use App\Models\Jenispendaftaran;
use App\Models\Tingkatpendidikan;
use App\Imports\ImportPesertadidik;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Imports\ImportModelPesertadidik;
use App\Imports\ImportCollectionPesertadidik;

class PesertadidikController extends Controller
{
    protected $uploadPath;
    protected $uploadPathexcel    = 'files/excel/';

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.directoryPesertadidik'));
    }

    public function index(){

        $this->cleanupload();

        return view('backend.pesertadidik.index',[
            'title' => 'Peserta Didik'
        ]);
    }

    /**
    * Create the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function create()
    {
        $this->cleanupload();

        return view('backend.pesertadidik.create', [
            'sekolah' => Sekolah::all(),
            'tahunajaran' => Tahunajaran::orderBy('nama', 'desc')->get(),
            'tingkatpendidikan' => Tingkatpendidikan::orderBy('tingkat_pendidikan_id', 'asc')->get(),
            'semester' => Semester::orderBy('nama', 'desc')->get(),
            'jenispendaftaran' => Jenispendaftaran::where('daftar_sekolah', 1)->get(),
            'title' => 'Tambah Peserta Didik'
        ]);

    }

    public function import(Request $request)
    {
        $validated = $request->validate([
            'importfile'           => 'required|mimes:xls,xlsx,csv',
            'sekolah_id'           => 'required',
            'tahunajaran_id'       => 'required',
            'semester_id'          => 'required',
            'tanggal_diterima'     => 'required',
            'tingkatpendidikan_id' => 'required',
            'jenispendaftaran_id'  => 'required',
        ]);

        $sekolahId           = $request->input('sekolah_id');
        $tahunajaranId       = $request->input('tahunajaran_id');
        $semesterId          = $request->input('semester_id');
        $tanggalditerima     = $request->input('tanggal_diterima');
        $tingkatpendidikanId = $request->input('tingkatpendidikan_id');
        $jenispendaftaranId  = $request->input('jenispendaftaran_id');

        $file          = $request->file('importfile');

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data

        // $import = Excel::import(new ImportPesertadidik(
        //     $sekolahId,
        //     $tahunajaranId,
        //     $semesterId,
        //     $tanggalditerima,
        //     $tingkatpendidikanId,
        //     $jenispendaftaranId),
        //     ('uploads/files/excel/'.$nama_file));

        $import = new ImportCollectionPesertadidik(
            $sekolahId,
            $tahunajaranId,
            $semesterId,
            $tanggalditerima,
            $tingkatpendidikanId,
            $jenispendaftaranId
        );

        $import->import('uploads/files/excel/'.$nama_file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

        // dd($import->failures());
        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);

        return redirect()->route('backend.pesertadidik.index')->with('success', 'Data Peserta Didik berhasil diimport!');
    }

    // Fungsi hapus file di folder livewire-tmp setelah simpan

    public function cleanupload()
    {
        $tempImages = Storage::files('files/excel');

        foreach ($tempImages as $file) {
            # code...
            Storage::delete($file);
        }
        // return redirect()->route('backend.pesertadidik.create');

    }

    public function show(Pesertadidik $pesertadidik): View
    {
        return view('backend.pesertadidik.show',[
            'datapeseradidik' => $pesertadidik,
            'title' => 'Peserta Didik'
        ]);

    }


}
