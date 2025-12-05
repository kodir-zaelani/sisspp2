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
use App\Models\Tingkatpendidikan;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithPagination;
    protected $paginationTheme = 'simple-bootstrap';

    public $currentPage = 1;
    public $paginate    = 10;
    public $paginatepd  = 20;
    public $search      = '';
    public $searchpd      = '';
    public $checked     = [];
    public $selectPage  = false;
    public $selectAll   = false;

    public $tahunjarans;
    public $tahunjaranId = NULL;
    public $semesterId = NULL;
    public $rombonganbelajarId = NULL;
    public $tigkatpendidikanId = NULL;
    public $jenispendaftaranId = NULL;
    public $pesertadidikId;
    public $pesertadidiks;
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
        $this->tahunjarans = Tahunajaran::orderBy('nama', 'desc')->get();

    }

    public function resetSearch()
    {
        $this->search = '';
    }
    public function resetSearchpd()
    {
        $this->searchpd = '';
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

    public function updatedSemesterId(){
        $this->rombonganbelajarId = NULL;
        $this->jenispendaftaranId = NULL;
    }
    public function updatedTigkatpendidikanId(){
        $this->rombonganbelajarId = NULL;
    }
    public function updatedJenispendaftaranId(){
        $this->rombonganbelajarId = NULL;
        $this->tigkatpendidikanId = NULL;
    }

    /**

    * Write code on Method

    *

    * @return response()

    */
    public function updatedtahunjaranId($value)
    {
        $this->semesterId         = NULL;
        $this->rombonganbelajarId = NULL;
        $this->tigkatpendidikanId = NULL;

    }

    #[On('refresh-the-component')]
    public function refreshTheComponent()
    {
        // need to do Refresh this component after listen
    }

    public function store($itemId)
    {
        $this->pesertadidikId = $itemId;
        $validateData = [
            'tahunjaranId'       => 'required',
            'rombonganbelajarId' => 'required',
            // 'pesertadidikId'     => 'required',
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
                    'anggotarombel_id'    => $anggotarombel->id,
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

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        if ($action == 'addanggota') {
            // This will show the modal in the frontend
            // dd('tambah anggota rombel : ', $this->store);
            $this->store($itemId);
        } elseif ($action == 'delete') {
            $this->dispatch('openDeleteModal');
        }

    }

    // Delete Single Record
    public function delete()
    {

        $anggotarombel = Anggotarombel::find($this->selectedItem);

        $tagihansiswa = Tagihansiswa::where('anggotarombel_id', $anggotarombel->id)->delete();

        Anggotarombel::destroy($this->selectedItem);

        $this->dispatch('closeDeleteModal');

        session()->flash('danger', 'Delete Anggota rombel Successfully');

    }

    public function render()
    {
        return view('livewire.backend.anggotarombel.create',[
            'semester'          => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
            'tigkatpendidikan'  => Tingkatpendidikan::where('kode', '<>' , 0)->orderBy('tingkat_pendidikan_id', 'asc')->get(),
            'rombonganbelajar'  => Rombonganbelajar::where('semester_id', $this->semesterId)
            ->where('tingkatpendidikan_id', $this->tigkatpendidikanId)
            ->orderBy('nama', 'asc')->get(),
            'jenispendaftaran'  => Jenispendaftaran::orderBy('jenis_pendaftaran_id', 'asc')->where('daftar_rombel', 1)->get(),
            'pesertadidik'      => Pesertadidik::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'asc')->searchpd(trim($this->searchpd))->paginate($this->paginatepd),
            'listanggotarombel' => $this->anggotarombel,
            'title'             => 'Tambah Anggota Rombel'
        ]);
    }
}