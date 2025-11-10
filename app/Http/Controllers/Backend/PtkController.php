<?php

namespace App\Http\Controllers\Backend;

use App\Imports\ImportPtk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

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
        $this->uploadPath = public_path(config('cms.image.directoryLogo'));
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
        return view('backend.ptk.create', [
            'title' => 'Daftar PTK'
        ]);

    }

    public function import(Request $request)
    {
        $validated = $request->validate([
            'importfile' => 'required|mimes:xls,xlsx,csv'
        ]);

        $file = $request->file('importfile');

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data
        $import = Excel::import(new ImportPtk(), ('uploads/files/excel/'.$nama_file));


        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);

        return redirect()->route('backend.ptk.index')->with('success', 'Data PTK berhasil diimport!');
    }
}