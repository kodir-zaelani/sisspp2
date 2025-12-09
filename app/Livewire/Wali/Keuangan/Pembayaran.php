<?php

namespace App\Livewire\Wali\Keuangan;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Walimuridsekolah;
use Illuminate\Support\Facades\Auth;

class Pembayaran extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $currentPage   = 1;
    public $paginate      = 10;
    public $search        = '';
    public $checked       = [];
    public $selectPage    = false;
    public $selectAll     = false;

    public $sortDirection = 'desc';
    public $sortColumn    = 'created_at';
    public $headersTable;
    public $action;
    public $selectedItem;
    public $pesertadidikId;

    protected $queryString = [
        // Keeping A Clean Query String https://laravel-livewire.com/docs/2.x/query-string#clean-query-string
        'search'      => ['except' => ''],
        'currentPage' => ['except' => 1]
    ];

    private function headerConfig()
    {
        return [
            'invoice'         => 'NO Invoice',
            'pesertadidik_id' => 'Nama',
            'total_amount'    => 'Total',
            'tanggalbayar'    => 'Tanggal Bayar',
            'status'          => 'Status',
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


    public function getInvoiceQueryProperty()
    {
        $user = Auth::id();
        $wali = Walimuridsekolah::where('user_id', $user)->first();
        $this->pesertadidikId  = $wali->pesertadidik_id;

        return Invoice::orderBy($this->sortColumn, $this->sortDirection)
        ->with('pesertadidik')
        ->where('pesertadidik_id', $this->pesertadidikId)
        ->search(trim($this->search)); //search menggunakan scopeSearch di model
    }

    public function getInvoiceProperty()
    {
        return $this->invoiceQuery->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.wali.keuangan.pembayaran',[
            'datainvoice'      => $this->invoice,
            'title' => 'Daftar Transaksi'
        ]);
    }
}