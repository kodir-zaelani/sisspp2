<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sekolah;
use Illuminate\View\View;
use App\Models\Tahunajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Imports\ImportCollectionJenistagihan;

class JenistagihanController extends Controller
{

    protected $uploadPath;
    protected $uploadPathexcel    = 'files/excel/';

    /**
    * __middleware
    *
    * @return void
    */

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:jenistagihan.index|jenistagihan.create|jenistagihan.edit|jenistagihan.delete|jenistagihan.trash',
        ];
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(): View
    {
        $this->cleanupload();

        return view('backend.jenistagihan.index', [
            'title' => 'Jenis Tagihan'
        ]);
    }

    public function create(): View
    {
        $this->cleanupload();

        return view('backend.jenistagihan.create', [
            'sekolah' => Sekolah::orderBy('nama', 'asc')->get(),
            'dataptahunajaran' => Tahunajaran::orderBy('tahun_ajaran_id', 'desc')->get(),
            'title' => 'Tambah Jenis Tagihan'
        ]);
    }

    public function store()
    {
        return view('backend.jenistagihan.index', [
            'title' => 'Jenis Tagihan'
        ]);
    }

    public function formimport(Request $request)
    {
        $this->cleanupload();

        return view('backend.jenistagihan.import', [
            'sekolah' => Sekolah::orderBy('nama', 'asc')->get(),
            'dataptahunajaran' => Tahunajaran::orderBy('tahun_ajaran_id', 'desc')->get(),
            'title' => 'Import Jenis Tagihan'
        ]);
    }
    public function import(Request $request)
    {
        $validated = $request->validate([
            'importfile'      => 'required|mimes:xls,xlsx,csv,odt',
            'sekolah_id'      => 'required',
            'tahunajaran_id'  => 'required',
            'tanggal_mulai'   => 'required',
            'tanggal_selesai' => 'required',
        ]);

        $sekolahId       = $request->input('sekolah_id');
        $tahunajaranId   = $request->input('tahunajaran_id');
        $tanggalmulai    = $request->input('tanggal_mulai');
        $tanggalberakhir = $request->input('tanggal_selesai');
        $file            = $request->file('importfile');

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data
        $import = new ImportCollectionJenistagihan(
            $sekolahId,
            $tahunajaranId,
            $tanggalmulai,
            $tanggalberakhir,
        );

        $import->import('uploads/files/excel/'.$nama_file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }
        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);

        return redirect()->route('backend.jenistagihan.index')->with('success', 'Data Jenis Tagihan berhasil diimport!');
    }

    public function cleanupload()
    {
        $tempImages = Storage::files('files/excel');

        foreach ($tempImages as $file) {
            Storage::delete($file);
        }

    }
}
