<?php

namespace App\Http\Controllers\Backend;

use App\Models\Bank;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use App\Models\Kebutuhankhusus;
use App\Models\Bentukpendidikan;
use App\Models\Jenjangpendidikan;
use App\Models\Statuskepemilikan;
use Laravolt\Indonesia\Models\City;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Laravolt\Indonesia\Models\Village;
use App\Imports\Importsatuanpendidikan;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Provinsi;
use App\Http\Requests\SekolahStoreRequest;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Requests\logosekolahUpdateRequest;
use Livewire\Features\SupportFileUploads\FileUploadConfiguration;

class SekolahController extends Controller
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
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:sekolah.index|sekolah.create|sekolah.edit|sekolah.delete|sekolah.trash',
        ];
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        return view('backend.sekolah.index', [
            'title' => 'Data Sekolah'
        ]);

    }
    public function create()
    {
        return view('backend.sekolah.create', [
            'databentukpendidikan' => Bentukpendidikan::orderBy('bentuk_pendidikan_id', 'asc')->get(),
            'kebutuhankhusus' => Kebutuhankhusus::orderBy('kebutuhan_khusus', 'asc')->get(),
            'datajenjangpendidikan' => Jenjangpendidikan::orderBy('jenjang_pendidikan_id', 'asc')->get(),
            'datakepemilikan' => Statuskepemilikan::orderBy('status_kepemilikan_id', 'asc')->get(),
            'dataprovinsi' => Province::orderBy('code', 'asc')->get(),
            'bank' => Bank::orderBy('bankid', 'asc')->get(),
            'title' => 'Tambah Satuan Pendidikan'
        ]);
    }

    public function edit($sekolah)
    {
        return view('backend.sekolah.edit', [
            'databentukpendidikan' => Bentukpendidikan::orderBy('bentuk_pendidikan_id', 'asc')->get(),
            'kebutuhankhusus' => Kebutuhankhusus::orderBy('kebutuhan_khusus', 'asc')->get(),
            'datajenjangpendidikan' => Jenjangpendidikan::orderBy('jenjang_pendidikan_id', 'asc')->get(),
            'datakepemilikan' => Statuskepemilikan::orderBy('status_kepemilikan_id', 'asc')->get(),
            'bank' => Bank::orderBy('bank_id', 'asc')->get(),
            'dataprovinsi' => Province::orderBy('code', 'asc')->get(),
            'datapcity' => City::where('province_code', $this->provinceCode)->orderBy('code', 'asc')->get(),
            'datadistrict' => District::where('city_code', $this->cityCode)->orderBy('code', 'asc')->get(),
            'datavillage' => Village::where('district_code', $this->districtCode)->orderBy('code', 'asc')->get(),
            'title' => 'Edit Satuan Pendidikan',
        ]);
    }

    public function store (SekolahStoreRequest $request)
    {

        // Default data
        $data = [
            'nss'                       => $request->input('nss'),
            'npsn'                      => $request->input('npsn'),
            'nama'                      => $request->input('nama'),
            'nama_nomenklatur'          => $request->input('nama_nomenklatur'),
            'bentukpendidikan_id'       => $request->input('bentukpendidikan_id'),
            'jenjangpendidikan_id'      => $request->input('jenjangpendidikan_id'),
            'statuskepemilikan_id'      => $request->input('statuskepemilikan_id'),
            'yayasan_id'                => $request->input('yayasan_id'),
            'kebutuhankhusus_id'        => $request->input('kebutuhankhusus_id'),
            'type_sekolah'              => $request->input('type_sekolah'),
            'status_sekolah'            => $request->input('status_sekolah'),
            'sk_pendirian_sekolah'      => $request->input('sk_pendirian_sekolah'),
            'tanggal_pendirian_sekolah' => $request->input('tanggal_pendirian_sekolah'),
            'sk_izin_operasional'       => $request->input('sk_izin_operasional'),
            'tanggal_izin_operasional'  => $request->input('tanggal_izin_operasional'),
            'alamat'                    => $request->input('alamat'),
            'rt'                        => $request->input('rt'),
            'rw'                        => $request->input('rw'),
            'nama_dusun'                => $request->input('nama_dusun'),
            'kode_pos'                  => $request->input('kode_pos'),
            'website'                   => $request->input('website'),
            'no_telp'                   => $request->input('no_telp'),
            'no_fax'                    => $request->input('no_fax'),
            'email'                     => $request->input('email'),
            'maps'                      => $request->input('maps'),
            'lintang'                   => $request->input('lintang'),
            'bujur'                     => $request->input('bujur'),
            'negara_id'                 => $request->input('negara_id'),
            'province_code'             => $request->input('province_code'),
            'city_code'                 => $request->input('city_code'),
            'district_code'             => $request->input('district_code'),
            'village_code'              => $request->input('village_code'),
            'no_rekening'               => $request->input('no_rekening'),
            'bank_id'                   => $request->input('bank_id'),
            'nama_bank'                 => $request->input('nama_bank'),
            'cabang_kcp_unit'           => $request->input('cabang_kcp_unit'),
            'mbs'                       => $request->input('mbs'),
            'npwp'                      => $request->input('npwp'),
            'nama_npwp'                 => $request->input('nama_npwp'),
            'cabang_kcp_unit'           => $request->input('cabang_kcp_unit'),
            'status_sekolah_update'     => $request->input('status_sekolah_update'),

        ];

        //upload logo_sekolah (cara kedua)
        if ($request->has('logo_sekolah')) {
            # upload with logo_sekolah
            $logo_sekolah = $request->file('logo_sekolah');
            $fileName = 'logo_' . time() . $logo_sekolah->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = Image::read($logo_sekolah);
            $successUploaded->save($destination . $fileName, 80);

            if ($successUploaded) {
                # script dibawah koneksi ke file App\config\cms.php
                $width = config('cms.image.thumbnaillogo.width');
                $height = config('cms.image.thumbnaillogo.height');
                $extension = $logo_sekolah->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::read($destination . '/' . $fileName)
                ->resize($width, $height)
                ->save($destination . '/' . $thumbnail);
            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'logo_sekolah' => $image_data
            ]);
        }

        $sekolah = Sekolah::create($data);

        if ($sekolah) {
            //redirect dengan pesan sukses
            return redirect()->route('backend.sekolah.index')->with(['success' => 'Data Sekolah Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('backend.sekolah.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update (SekolahUpdateRequest $request, Sekolah $sekolah)
    {
        //cek gambar lama
        $oldLogo        = $sekolah>logo_sekolah;
        // Default data
        $data = [
            'nss'                      => $request->input('nss'),
            'npsn'                     => $request->input('npsn'),
            'nama'                     => $request->input('nama'),
            'nama_nomenklatur'         => $request->input('nama_nomenklatur'),
            'bentukpendidikan_id'      => $request->input('bentukpendidikan_id'),
            'jenjangpendidikan_id'     => $request->input('jenjangpendidikan_id'),
            'statuskepemilikan_id'     => $request->input('statuskepemilikan_id'),
            'yayasan_id'               => $request->input('yayasan_id'),
            'kebutuhankhusus_id'       => $request->input('kebutuhankhusus_id'),
            'type_sekolah'             => $request->input('type_sekolah'),
            'status_sekolah'           => $request->input('status_sekolah'),
            'sk_pendirian_sekolah'     => $request->input('sk_pendirian_sekolah'),
            'tanggal_pendirian_sekolah'    => $request->input('tanggal_pendirian_sekolah'),
            'sk_izin_operasional'      => $request->input('sk_izin_operasional'),
            'tanggal_izin_operasional' => $request->input('tanggal_izin_operasional'),
            'alamat'                   => $request->input('alamat'),
            'rt'                       => $request->input('rt'),
            'rw'                       => $request->input('rw'),
            'nama_dusun'               => $request->input('nama_dusun'),
            'kode_pos'                 => $request->input('kode_pos'),
            'website'                  => $request->input('website'),
            'no_telp'                  => $request->input('no_telp'),
            'no_fax'                   => $request->input('no_fax'),
            'email'                    => $request->input('email'),
            'maps'                     => $request->input('maps'),
            'lintang'                  => $request->input('lintang'),
            'bujur'                    => $request->input('bujur'),
            'negara_id'                => $request->input('negara_id'),
            'province_code'            => $request->input('province_code'),
            'city_code'                => $request->input('city_code'),
            'district_code'            => $request->input('district_code'),
            'village_code'             => $request->input('village_code'),
            'no_rekening'              => $request->input('no_rekening'),
            'bank_id'                  => $request->input('bank_id'),
            'nama_bank'                => $request->input('nama_bank'),
            'cabang_kcp_unit'          => $request->input('cabang_kcp_unit'),
            'mbs'                      => $request->input('mbs'),
            'npwp'                     => $request->input('npwp'),
            'nama_npwp'                => $request->input('nama_npwp'),
            'cabang_kcp_unit'          => $request->input('cabang_kcp_unit'),
            'status_sekolah_update'    => $request->input('status_sekolah_update'),
        ];


        //upload logo_sekolah (cara kedua)
        if ($request->has('logo_sekolah')) {
            # upload with logo_sekolah
            $logo_sekolah = $request->file('logo_sekolah');
            $fileName = 'logo_' . time() . $logo_sekolah->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = Image::read($logo_sekolah);
            $successUploaded->save($destination . $fileName, 80);

            if ($successUploaded) {
                # script dibawah koneksi ke file App\config\cms.php
                $width = config('cms.image.thumbnaillogo.width');
                $height = config('cms.image.thumbnaillogo.height');
                $extension = $logo_sekolah->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::read($destination . '/' . $fileName)
                ->resize($width, $height)
                ->save($destination . '/' . $thumbnail);
            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'logo_sekolah' => $image_data
            ]);
        }

        $sekolah>update($data);

        // Jika gambar lama ada maka lakukan hapus gambar
        if ($oldLogo !== $sekolah>logo_sekolah) {
            $this->removeLogo($oldLogo);
        }

        //redirect dengan pesan sukses
        return redirect()->back()->with(['success' => 'Data sekolah Berhasil Disimpan!']);
    }

    public function updatelogo (logosekolahUpdateRequest $request, Sekolah $sekolah)
    {
        //cek gambar lama
        $oldLogo        = $sekolah->logo_sekolah;

        // Default data
        $data = [];

        //upload logo_sekolah (cara kedua)
        if ($request->has('logo_sekolah')) {
            # upload with logo_sekolah
            $logo_sekolah = $request->file('logo_sekolah');
            $fileName = 'logo_' . time() . $logo_sekolah->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = Image::read($logo_sekolah);
            $successUploaded->save($destination . $fileName, 80);

            if ($successUploaded) {
                # script dibawah koneksi ke file App\config\cms.php
                $width = config('cms.image.thumbnaillogo.width');
                $height = config('cms.image.thumbnaillogo.height');
                $extension = $logo_sekolah->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::read($destination . '/' . $fileName)
                ->resize($width, $height)
                ->save($destination . '/' . $thumbnail);
            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'logo_sekolah' => $image_data
            ]);
        }

        $sekolah->update($data);

        // Jika gambar lama ada maka lakukan hapus gambar
        if ($oldLogo !== $sekolah->logo_sekolah) {
            $this->removeLogo($oldLogo);
        }
        $this->cleanupTempImages();
        //redirect dengan pesan sukses
        return redirect()->back()->with(['success' => 'Logo Berhasil Disimpan!']);
    }

    // Fungsi hapus file di folder livewire-tmp setelah simpan

    protected function cleanupTempImages()
    {
        $tempImages = Storage::files('livewire-tmp');

        foreach ($tempImages as $file) {
            # code...
            Storage::delete($file);
        }
    }

    // Fungsi hapus file di folder livewire-tmp secara automatis
    protected function cleanupOldUploads()
    {
        if (FileUploadConfiguration::isUsingS3()) return;

        $storage = FileUploadConfiguration::storage();

        foreach ($storage->allFiles(FileUploadConfiguration::path()) as $filePathname) {
            // On busy websites, this cleanup code can run in multiple threads causing part of the output
            // of allFiles() to have already been deleted by another thread.
            if (! $storage->exists($filePathname)) continue;

            $yesterdaysStamp = now()->subHours(2)->timestamp;
            if ($yesterdaysStamp > $storage->lastModified($filePathname)) {
                $storage->delete($filePathname);
            }
        }
    }

    // function remove image
    private function removeLogo($oldLogo)
    {
        if (!empty($oldLogo)) {
            $imagePath     = $this->uploadPath . '/' . $oldLogo;
            $ext           = substr(strrchr($oldLogo, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $oldLogo);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }

    // function remove image


    public function import( Request $request)
    {
        $validated = $request->validate([
            'importfile' => 'required|mimes:xls,xlsx,csv'
        ]);

        $file = $request->file('importfile');

        $nama_file = $file->hashName();

        $destination = $this->uploadPathexcel;

        $path = $file->store($destination);


        // import data
        $import = Excel::import(new Importsatuanpendidikan(), ('uploads/files/excel/'.$nama_file));


        //remove file import from server
        File::delete('uploads/files/excel/'.$nama_file);

        return redirect()->route('backend.sekolah.index')->with('success', 'Data sekolah berhasil diimport!');
    }


}
