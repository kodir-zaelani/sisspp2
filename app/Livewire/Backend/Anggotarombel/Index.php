<?php

namespace App\Livewire\Backend\Anggotarombel;

use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use Livewire\WithPagination;
use App\Models\Anggotarombel;
use App\Models\Rombonganbelajar;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;

    public $sortDirection = 'asc';
    public $sortColumn    = 'pesertadidik_id';

    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

    public $tahunjaranId;
    public $semesterId;
    public $rombonganbelajarId;

    public function updatedTahunajaran(){
        $this->semesterId         = null;
        $this->rombonganbelajarId = null;
        $this->pesertadidikId     = null;
    }

    public function updatedSemester(){
        $this->rombonganbelajarId = null;
        $this->pesertadidikId = null;
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

    public function getAnggotarombelQueryProperty()
    {
        return Anggotarombel::orderBy($this->sortColumn, $this->sortDirection)
        ->with('pesertadidik')
        ->where('rombonganbelajar_id', $this->rombonganbelajarId)
        ->where('semester_id', $this->semesterId)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getAnggotarombelProperty()
    {
        return $this->anggotarombelQuery->paginate($this->paginate);
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->anggotarombel->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function render()
    {
        return view('livewire.backend.anggotarombel.index',[
            'tahunajaran'       => Tahunajaran::orderBy('nama', 'desc')->get(),
            'semester'          => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
            'rombonganbelajar'  => Rombonganbelajar::where('semester_id', $this->semesterId)->orderBy('nama', 'asc')->get(),
            'dataanggotarombel' => $this->anggotarombel,
            'title' => 'Daftar Anggota Rombel'
        ]);
    }
}