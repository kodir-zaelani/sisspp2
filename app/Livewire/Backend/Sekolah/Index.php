<?php

namespace App\Livewire\Backend\Sekolah;

use App\Models\Sekolah;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Kebutuhankhusus;
use App\Models\Bentukpendidikan;
use App\Models\Jenjangpendidikan;
use App\Models\Statuskepemilikan;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Livewire\Features\SupportFileUploads\FileUploadConfiguration;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;

    public $sortDirection = 'asc';
    public $sortColumn    = 'nama';

    public $sekolahid;
    public $nss;
    public $npsn;
    public $nama;
    public $alamat;
    public $rt;
    public $rw;
    public $no_telp;
    public $no_fax;
    public $nama_dusun;
    public $kode_pos;
    public $website;
    public $email;
    public $maps;
    public $lintang;
    public $bujur;
    public $sk_pendirian_sekolah;
    public $tanggal_pendirian_sekolah;
    public $status_sekolah_update;
    public $province_code;
    public $logo_sekolah;

    public $editId;
    public $npsnedit;
    public $nssedit;
    public $namaedit;
    public $alamatedit;
    public $rtedit;
    public $rwedit;
    public $no_telpedit;
    public $no_faxedit;
    public $nama_dusunedit;
    public $kode_posedit;
    public $websiteedit;
    public $emailedit;
    public $mapsedit;
    public $lintangedit;
    public $bujuredit;
    public $sk_pendirian_sekolahedit;
    public $tanggal_pendirian_sekolahedit;
    public $status_sekolah_updateedit;
    public $maps_update;
    public $bentukpendidikan_idedit;

    public $provinceCode;
    public $cityCode;
    public $districtCode;
    public $villageCode;
    public $province_codeedit;
    public $city_codeedit;
    public $district_codeedit;
    public $village_codeedit;
    public $logo_sekolahedit;

    public $selectedItem;
    public $statusUpdate  = false;
    public $statusCreate  = false;
    public $statusList  = false;
    public $statusView  = false;
    public $headersTable;
    public $action;

    public $uploadPath= 'uploads/images/logo';

    public function updatedProvinceCode(){
        $this->cityCode = null;
        $this->districtCode = null;
        $this->villageCode = null;
    }

    public function updatedCityCode(){
        $this->districtCode = null;
        $this->villageCode = null;
    }

    public function updatedDistrictCode(){
        $this->villageCode = null;
    }

    public function store()
    {
        $validateData = [
            'npsn'    => 'required|min:6|unique:sekolah,nama',
            'nama'    => 'required|min:2|unique:sekolah,nama',
        ];

        // Default data
        $data = [
            'npsn'                      => $this->npsn,
            'nss'                       => $this->nss,
            'nama'                      => $this->nama,
            'slug'                      => Str::slug($this->nama),
            'sk_pendirian_sekolah'      => $this->sk_pendirian_sekolah,
            'tanggal_pendirian_sekolah' => $this->tanggal_pendirian_sekolah,
            'website'                   => $this->website,
            'email'                     => $this->email,
            'rt'                        => $this->rt,
            'rw'                        => $this->rw,
            'alamat'                    => $this->alamat,
            'nama_dusun'                => $this->nama_dusun,
            'kode_pos'                  => $this->kode_pos,
            'no_telp'                   => $this->no_telp,
            'no_fax'                    => $this->no_fax,
            'province_code'             => $this->provinceCode,
            'city_code'                 => $this->cityCode,
            'district_code'             => $this->districtCode,
            'village_code'              => $this->villageCode,
            'maps'                      => $this->maps,
            'lintang'                   => $this->lintang,
            'bujur'                     => $this->bujur,
            'bentukpendidikan_id'       => $this->bentukpendidikan_id,
            'jenjangpendidikan_id'      => $this->jenjangpendidikan_id,
            'statuskepemilikan_id'      => $this->statuskepemilikan_id,
            'kebutuhankhusus_id'        => $this->kebutuhankhusus_id,
        ];

        $this->validate($validateData);
        $sekolah = Sekolah::create($data);

        return redirect()->route('backend.sekolah.index')->with('success', 'Data Sekolah berhasil ditambahkan');
    }





    public function edit($sekolahID)
    {
        $this->statusUpdate = true;
        $this->modelId = $sekolahID;

        $model = Sekolah::find($this->modelId);

        $this->editId                        = $model->id;
        $this->nssedit                       = $model->nss;
        $this->npsnedit                      = $model->npsn;
        $this->namaedit                      = $model->nama;
        $this->alamatedit                    = $model->alamat;
        $this->rtedit                        = $model->rt;
        $this->rwedit                        = $model->rw;
        $this->no_telpedit                   = $model->no_telp;
        $this->no_faxedit                    = $model->no_fax;
        $this->nama_dusunedit                = $model->nama_dusun;
        $this->kode_posedit                  = $model->kode_pos;
        $this->websiteedit                   = $model->website;
        $this->emailedit                     = $model->email;
        $this->mapsedit                      = $model->maps;
        $this->lintangedit                   = $model->lintang;
        $this->bujuredit                     = $model->bujur;
        $this->sk_pendirian_sekolahedit      = $model->sk_pendirian_sekolah;
        $this->tanggal_pendirian_sekolahedit = $model->tanggal_pendirian_sekolah;
        $this->province_codeedit             = $model->province->name;
        $this->city_codeedit                 = $model->city->name;
        $this->district_codeedit             = $model->district_code;
        $this->village_codeedit              = $model->village_code;
        $this->logo_sekolahedit              = $model->logo_sekolah;
        $this->bentukpendidikan_idedit              = $model->bentukpendidikan_id;

    }

    public function createData()
    {
        $this->statusUpdate = false;
        $this->statusCreate = true;
        $this->statusList = false;
        $this->statusView = false;
    }
    public function view()
    {
        $this->statusUpdate = false;
        $this->statusCreate = false;
        $this->statusList = false;
        $this->statusView = true;
    }

    public function cancelEdit()
    {
        $this->statusUpdate = false;
        $this->statusCreate = false;
        $this->statusList = true;
        $this->statusView = false;
    }
    public function ubahpeta($editId)
    {
        $sekolahId = $editId;
        $data = [
            'lintang' => $this->lintangedit,
            'bujur'   => $this->bujuredit,
        ];

        if (!empty($this->mapsedit)) {
            $data = array_merge($data, [
                'maps' => $this->mapsedit
            ]);
        }

        if(count($data)) {
            $sekolah = Sekolah::find($sekolahId);
            $sekolah->update($data);
        }

        $this->statusUpdate = false;

        return redirect()->route('backend.sekolah.index')->with('warning', 'Data Peta Sekolah berhasil diperbaharui');


    }
    public function ubahdata($editId)
    {
        $sekolahId = $editId;

        $validateData = [
            'namaedit' => 'required|min:2',
            // 'sk_pendirian_sekolahedit'  => 'required',
            // 'tanggal_pendirian_sekolahedit' => 'required',
            // 'emailedit'                 => 'required',
            // 'rtedit'                    => 'required',
            // 'rwedit'                    => 'required',
            // 'alamatedit'                => 'required',
            // 'nama_dusunedit'            => 'required',
            // 'kode_posedit'              => 'required',
            // 'no_telpedit'               => 'required',
        ];
        // Default data
        $data = [
            'nama'                      => $this->namaedit,
            'nss'                       => $this->nssedit,
            'npsn'                      => $this->npsnedit,
            'alamat'                    => $this->alamatedit,
            'rt'                        => $this->rtedit,
            'rw'                        => $this->rwedit,
            'no_telp'                   => $this->no_telpedit,
            'no_fax'                    => $this->no_faxedit,
            'nama_dusun'                => $this->nama_dusunedit,
            'kode_pos'                  => $this->kode_posedit,
            'website'                   => $this->websiteedit,
            'email'                     => $this->emailedit,
            'sk_pendirian_sekolah'      => $this->sk_pendirian_sekolahedit,
            'tanggal_pendirian_sekolah' => $this->tanggal_pendirian_sekolahedit,
            'bentukpendidikan_id'       => $this->bentukpendidikan_idedit,
            'jenjangpendidikan_id'      => $this->jenjangpendidikan_idedit,
            'statuskepemilikan_id'      => $this->statuskepemilikan_idedit,
            'kebutuhankhusus_id'        => $this->kebutuhankhusus_idedit,
        ];

        if (!empty($this->provinceCode)) {
            $data = array_merge($data, [
                'province_code' => $this->provinceCode
            ]);
        }
        if (!empty($this->cityCode)) {
            $data = array_merge($data, [
                'city_code' => $this->cityCode
            ]);
        }
        if (!empty($this->districtCode)) {
            $data = array_merge($data, [
                'district_code' => $this->districtCode
            ]);
        }
        if (!empty($this->villageCode)) {
            $data = array_merge($data, [
                'village_code' => $this->villageCode
            ]);
        }

        $this->validate($validateData);

        // dump($data);
        if(count($data)) {
            $sekolah = Sekolah::find($sekolahId);
            $sekolah->update($data);
        }

        $this->cleanVars();

        $this->statusUpdate = false;

        return redirect()->route('backend.sekolah.index')->with('warning', 'Data Sekolah berhasil diperbaharui');



    }

    private function cleanVars()
    {
        // Kosongkan field input
        $this->provinceCode = null;
        $this->cityCode     = null;
        $this->districtCode = null;
        $this->villageCode  = null;
    }


    private function removeImage($oldImage)
    {
        if ( ! empty($oldImage) )
            {
            $imagePath     = $this->uploadPath . '/' . $oldImage;
            $thumbnailPath = $this->uploadPath . '/images_thumb/' . $oldImage;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        }
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

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'npsn'                 => 'NPSN',
            'nama'                 => 'Nama',
            'status_sekolah'       => 'Status',
            'city_code'            => 'Kab./Kota',
            'bentukpendidikan_id'  => 'Bentuk',
            'statuskepemilikan_id' => 'Kepemilikan',
        ];
    }

    public function sortBy($column)
    {
        $this->sortColumn = $column;

        $this->sortDirection = $this->reverseSort();

    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
        ? 'desc'
        : 'asc';
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'currentPage'));
        $this->resetSearch();
        $this->headersTable = $this->headerConfig();

    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getSekolahQueryProperty()
    {
        return Sekolah::orderBy($this->sortColumn, $this->sortDirection)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getSekolahProperty()
    {
        return $this->sekolahQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->sekolah->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;

        if ($action == 'delete') {
            // This will show the modal in the frontend
            $this->dispatch('openDeleteModal');
        } elseif($action == 'selection') {
            $this->changeSelection();
        }
    }

    // Delete Single Record
    public function delete()
    {
        $sekolah = Sekolah::find($this->selectedItem);

        Sekolah::destroy($this->selectedItem);

        // Sweet alert
        $this->dispatch('swal:modal', [
            'title' => 'Success!',
            'timer' => 4000,
            'icon'  => 'success',
            'text'  => 'Post was send to trash',
            // 'toast'=>true, // Jika mau menggunakan toas
            // 'position'=>'top-right', // Jika mau menggunakan toas
            'showConfirmButton' => true,
            'showCancelButton'  => false,
        ]);

        $this->dispatch('refreshParent');
        // This will hide the modal in the frontend
        $this->dispatch('closeDeleteModal');
        return redirect()->to('backend/sekolah')->with('danger', 'Sekolah send to trash was successfully');
    }

    public function render()
    {
        return view('livewire.backend.sekolah.index',[
            'datasekolah' => $this->sekolah,
            'sekolah' => Sekolah::where('status_sekolah_update', '1')->first(),
            'databentukpendidikan' => Bentukpendidikan::orderBy('bentuk_pendidikan_id', 'asc')->get(),
            'kebutuhankhusus' => Kebutuhankhusus::orderBy('kebutuhan_khusus', 'asc')->get(),
            'datajenjangpendidikan' => Jenjangpendidikan::orderBy('jenjang_pendidikan_id', 'asc')->get(),
            'datakepemilikan' => Statuskepemilikan::orderBy('status_kepemilikan_id', 'asc')->get(),
            'dataprovinsi' => Province::orderBy('code', 'asc')->get(),
            'datapcity' => City::where('province_code', $this->provinceCode)->orderBy('code', 'asc')->get(),
            'datadistrict' => District::where('city_code', $this->cityCode)->orderBy('code', 'asc')->get(),
            'datavillage' => Village::where('district_code', $this->districtCode)->orderBy('code', 'asc')->get(),
            'title' => 'Satuan Pendidikan'
        ]);
    }

}
