<?php

namespace App\Livewire\Backend\Anggotarombel;

use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use Livewire\Attributes\On;
use App\Models\Jenistagihan;
use App\Models\Pesertadidik;
use App\Models\Tagihansiswa;
use Livewire\WithPagination;
use App\Models\Anggotarombel;
use App\Models\Jenispendaftaran;
use App\Models\Rombonganbelajar;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;

    public $tahunjaranId;
    public $semesterId;
    public $rombonganbelajarId;
    public $pesertadidikId;
    public $pesertadidiks;
    public $jenispendaftaranId;
    public $jenistagihanId;

    public $sortDirection = 'asc';
    public $sortColumn    = 'pesertadidik_id';

    public $statusUpdate  = false;
    public $headersTable;
    public $action;
    public $selectedItem;

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

    public function updatedTahunajaran(){
        $this->semesterId         = null;
        $this->rombonganbelajarId = null;
        $this->pesertadidikId     = null;
    }

    public function updatedSemester(){
        $this->rombonganbelajarId = null;
        $this->pesertadidikId = null;
    }

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        // need to do Refresh this component after listen
    }

    public function store()
    {

        $validateData = [
            'tahunjaranId'       => 'required',
            'rombonganbelajarId' => 'required',
            'pesertadidikId'     => 'required',
            'semesterId'         => 'required',
            'jenispendaftaranId' => 'required',
        ];

        // Default data
        $data = [
            'rombonganbelajar_id' => $this->rombonganbelajarId,
            'semester_id'         => $this->semesterId,
            'pesertadidik_id'     => $this->pesertadidikId,
            'jenispendaftaran_id' => $this->jenispendaftaranId,
            'created_by'          => Auth::id(),
        ];

        $this->validate($validateData);

        $anggotarombel = Anggotarombel::create($data);

        $nilaitagihan = Jenistagihan::where('tahunajaran_id', $this->tahunjaranId)->where('jenis_periodik', 'bulan')->get();

        foreach ($nilaitagihan as $item) {
            for ($i=1; $i <= 12 ; $i++) {
                $tagihansiswa = Tagihansiswa::create([
                    'rombonganbelajar_id' => $this->rombonganbelajarId,
                    'semester_id'         => $this->semesterId,
                    'pesertadidik_id'     => $this->pesertadidikId,
                    'jenistagihan_id'     => $item->id,
                    'periode_bulan'       => $i,
                    'nilai_tagihan'       => $item->besaran,
                    'created_by'          => Auth::id(),
                ]);
            }
        }


        // This is to reset our public variables
        $this->cleanVars();
        // $this->dispatch('refresh-the-component');
        session()->flash('success', 'Create Anggota rombel [ ' . $anggotarombel->pesertadidik['nama'] . ' ] Successfully');
    }

    private function cleanVars()
    {
        // Kosongkan field input
        $this->pesertadidikId        = null;
        // $this->description = null;
        // $this->guard_name = null;
    }

    public function render()
    {
        return view('livewire.backend.anggotarombel.create',[
            'tahunajaran'       => Tahunajaran::orderBy('nama', 'desc')->get(),
            'semester'          => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
            'rombonganbelajar'  => Rombonganbelajar::where('semester_id', $this->semesterId)->orderBy('nama', 'asc')->get(),
            'jenispendaftaran'  => Jenispendaftaran::orderBy('jenis_pendaftaran_id', 'asc')->where('daftar_rombel', 1)->get(),
            'pesertadidik'      => Pesertadidik::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'asc')->get(),
            'listanggotarombel' => $this->anggotarombel,
            'title'             => 'Tambah Anggota Rombel'
        ]);
    }
}
