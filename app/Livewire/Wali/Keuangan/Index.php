<?php

namespace App\Livewire\Wali\Keuangan;

use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use App\Models\Jenistagihan;
use App\Models\Tagihansiswa;
use Livewire\WithPagination;
use App\Models\Rombonganbelajar;
use App\Models\Walimuridsekolah;
use App\Models\Detailtempinvoice;
use App\Models\Tingkatpendidikan;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $filter        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;

    public $sortDirection = 'asc';
    public $sortColumn    = 'pesertadidik_id';

    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $tahunjarans;

    public $pesertadidikId = NULL;
    public $tahunjaranId = NULL;
    public $semesterId = NULL;
    public $rombonganbelajarId = NULL;
    public $tigkatpendidikanId = NULL;



    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'pesertadidik_id' => 'Nama',
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
        $this->tahunjarans = Tahunajaran::orderBy('nama', 'desc')->get();


        // $tagihans = Tagihansiswa::where('pesertadidik_id', $pdid)->where('statusbayar', 'Belum')->get();

    }

    public function resetSearch()
    {
        $this->search = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->filter = '';
    }

    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function getTagihansiswaQueryProperty()
    {

        return Tagihansiswa::orderBy($this->sortColumn, $this->sortDirection)
        ->with('pesertadidik', 'jenistagihan')
        ->where('pesertadidik_id', $this->pesertadidikId )
        ->where('statusbayar', 'Belum')
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getTagihansiswaProperty()
    {
        return $this->tagihansiswaQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->tagihansiswa->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        if ($action == 'bayartagihan') {
            $this->simpantagihan($itemId);
        }
    }

    public function simpantagihan()
    {
        $temptagihansiswa = Tagihansiswa::where('id', $this->selectedItem)->first();

        $temptagihansiswa->update([
            'statusbayar' => 'PENDING'
        ]);

        $data = [
            'tagihansiswa_id' => $temptagihansiswa->id,
            'periode_bulan'   => $temptagihansiswa->periode_bulan,
            'nilai_tagihan'   => $temptagihansiswa->nilai_tagihan,
            'pesertadidik_id' => $temptagihansiswa->pesertadidik_id,
        ];

        $temptransaksitagihansiswa = Detailtempinvoice::create($data);

        session()->flash('success', 'Tambah Item order pembayaran berhasil!');

    }



    public function render()
    {
        $user = Auth::user()->id;
        $wali = Walimuridsekolah::where('user_id', $user)->first();
        $nama_sekolah = $wali->sekolah->nama;
        $nama_pd = $wali->pesertadidik->nama;
        $this->pesertadidikId  = $wali->pesertadidik_id;
        return view('livewire.wali.keuangan.index',[
            'nama_pd' => $nama_pd,
            'ordertagihans'          => Tagihansiswa::with('pesertadidik', 'jenistagihan')
            ->where('pesertadidik_id', $this->pesertadidikId )
            ->where('statusbayar', 'PENDING')->get(),
            'semester'          => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
            'tigkatpendidikan'  => Tingkatpendidikan::where('kode', '<>' , 0)->orderBy('tingkat_pendidikan_id', 'asc')->get(),
            'rombonganbelajar'  => Rombonganbelajar::where('semester_id', $this->semesterId)
            ->where('tingkatpendidikan_id', $this->tigkatpendidikanId)
            ->orderBy('nama', 'asc')->get(),
            'datatagihansiswa' => $this->tagihansiswa,
            'title' => 'Tagihan Siswa',
        ]);
    }

}
