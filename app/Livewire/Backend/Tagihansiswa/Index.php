<?php

namespace App\Livewire\Backend\Tagihansiswa;

use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use App\Models\Jenistagihan;
use App\Models\Tagihansiswa;
use Livewire\WithPagination;
use App\Models\Rombonganbelajar;
use App\Models\Tingkatpendidikan;

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

    public $tahunjaranId = NULL;
    public $semesterId = NULL;
    public $rombonganbelajarId = NULL;
    public $tigkatpendidikanId = NULL;


    public function updatedSemesterId(){
        $this->rombonganbelajarId = NULL;
        $this->pesertadidikId = NULL;
    }
    public function updatedTigkatpendidikanId(){
        $this->rombonganbelajarId = NULL;
    }

    public function updatedtahunjaranId($value)

    {
        $this->rombonganbelajarId = NULL;
        $this->pesertadidikId     = NULL;
        $this->tigkatpendidikanId = NULL;

    }

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
        $this->fill(request()->only('filter', 'currentPage'));
        $this->resetSearch();
        $this->resetFilter();
        $this->headersTable = $this->headerConfig();
        $this->tahunjarans = Tahunajaran::orderBy('nama', 'desc')->get();

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
        ->where('rombonganbelajar_id', $this->rombonganbelajarId)
        ->where('semester_id', $this->semesterId)
        // ->filter(trim($this->filter))
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


    public function render()
    {
        return view('livewire.backend.tagihansiswa.index',[
            'jenistagihans'          => Jenistagihan::orderBy('nama', 'asc')->get(),
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
