<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportCollectionPtk;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class PtkController extends Controller
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
        $this->uploadPath = public_path(config('cms.image.directoryPtk'));
    }


    public static function middleware(): array
    {
        return [
            'permission:ptk.index|ptk.create|ptk.edit|ptk.delete|ptk.trash',
        ];
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        $this->cleanupload();
        return view('backend.ptk.index', [
            'title' => 'Daftar PTK'
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
        return view('backend.ptk.create', [
            'sekolah' => Sekolah::all(),
            'title' => 'Daftar PTK'
        ]);

    }

    public function import(Request $request)
    {
        $validated = $request->validate([
            'importfile' => 'required|mimes:xls,xlsx,csv'
        ]);

        $sekolahId = $request->input('sekolah_id');
        $file      = $request->file('importfile');

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data
        // $import = Excel::import(new ImportPtk(), ('uploads/files/excel/'.$nama_file));
        $import = new ImportCollectionPtk(
            $sekolahId,
        );

        $import->import('uploads/files/excel/'.$nama_file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }
        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);

        return redirect()->route('backend.ptk.index')->with('success', 'Data PTK berhasil diimport!');
    }

    public function cleanupload()
    {
        $tempImages = Storage::files('files/excel');

        foreach ($tempImages as $file) {
            Storage::delete($file);
        }

    }
}
