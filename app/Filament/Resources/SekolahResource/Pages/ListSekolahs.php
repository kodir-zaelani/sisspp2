<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use Filament\Actions;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Importsatuanpendidikan;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\SekolahResource;

class ListSekolahs extends ListRecords
{
    protected static string $resource = SekolahResource::class;
    protected ?string $heading = 'Sekolah';
    protected $uploadPathexcel    = 'files/excel/';
    public $importfile = '';
    public $file = '';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    // public function getHeader(): ?View
    // {
    //     $data = Actions\CreateAction::make()->label('Tambah Data');
    //     return view('filament.settings.custom-header',[
    //         'data' => $data,
    //     ]);
    // }

    public function import()
    {

        // $file = $this->importfile;
        dd($file);

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data
        $import = Excel::import(new Importsatuanpendidikan(), ('uploads/files/excel/'.$nama_file));


        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);
    }

}
