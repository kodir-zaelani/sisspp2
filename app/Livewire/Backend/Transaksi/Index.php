<?php

namespace App\Livewire\Backend\Transaksi;

use Midtrans\Snap;
use App\Models\Invoice;
use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use Illuminate\Support\Str;
use App\Models\Jenistagihan;
use App\Models\Tagihansiswa;
use Livewire\WithPagination;
use App\Models\Anggotarombel;
use App\Models\Detailinvoice;
use App\Models\Rombonganbelajar;
use App\Models\Detailtempinvoice;
use App\Models\Tingkatpendidikan;
use Illuminate\Support\Facades\DB;

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
    public $bayarsementaras;

    public $tahunjaranId = NULL;
    public $semesterId = NULL;
    public $rombonganbelajarId = NULL;
    public $tigkatpendidikanId = NULL;
    public $pesertadidikId = NULL;

    public $temptagihansiswaid      = '';
    public $temptagihansiswanama    = '';
    public $temptagihansiswaperiode = '';
    public $temptagihansiswanilai   = '';

    public $idtemptagihansiswa      = '';
    public $note;
    public $total_amount;


    public function updatedSemesterId(){
        $this->rombonganbelajarId = NULL;
        $this->pesertadidikId = NULL;
    }
    public function updatedTigkatpendidikanId(){
        $this->rombonganbelajarId = NULL;
    }
    public function updatedRombonganbelajarId(){
        // $this->pesertadidikId = NULL;
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
        ->where('pesertadidik_id', $this->pesertadidikId)
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

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        if ($action == 'bayartagihan') {
            $this->simpantagihan($itemId);
        } elseif ($action == 'delete') {
            $this->dispatch('openDeleteModal');
        }
    }

    public function checkout()
    {
        $this->dispatch('openCheckoutModal');
    }

    public function simpantagihan()
    {
        $temptagihansiswa = Tagihansiswa::where('id', $this->selectedItem)->first();


        $data = [
            'tagihansiswa_id' => $temptagihansiswa->id,
            'periode_bulan'   => $temptagihansiswa->periode_bulan,
            'nilai_tagihan'   => $temptagihansiswa->nilai_tagihan,
            'pesertadidik_id' => $temptagihansiswa->pesertadidik_id,
        ];

        $temptransaksitagihansiswa = Detailtempinvoice::create($data);
    }

    // Delete Single Record
    public function delete()
    {

        Detailtempinvoice::destroy($this->selectedItem);

        $this->dispatch('closeDeleteModal');

        session()->flash('danger', 'Delete Itam transaksi tagihan Successfully');

    }

    public function prosescheckout()
    {
        // Set midtrans configuration
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');

        $data = [
            'invoice'             => 'INV-'.Str::upper(Str::random(9)),
            'rombonganbelajar_id' => $this->rombonganbelajarId,
            'pesertadidik_id'     => $this->pesertadidikId,
            'semester_id'         => $this->semesterId,
            'note'                => $this->note,
            'status'              => 'PENDING',
        ];

        // dd($data);

        $invoice = Invoice::create($data);

        $detailtempproses = Detailtempinvoice::all();

        $totalamount = 0;

        foreach ($detailtempproses as $item) {

            $datadetail = [
                'invoice_id'      => $invoice->id,
                'tagihansiswa_id' => $item->tagihansiswa_id,
                'periode_bulan'   => $item->periode_bulan,
                'nilai_tagihan'   => $item->nilai_tagihan,
            ];

            $totalamount = $totalamount + $item->nilai_tagihan;

            $detailinvoice = Detailinvoice::create($datadetail);
        }

        $invoice->total_amount = $totalamount;
        $invoice->save();


        $payload = [
            'transaction_details' => [
                'order_id'      => $invoice->invoice,
                'gross_amount'  => $invoice->total_amount,
            ],
            'customer_details' => [
                'first_name'       => $invoice->pesertadidik->nama,
                'email'            => $invoice->pesertadidik->email,
                ]
            ];

            //create snap token
            $snapToken = Snap::getSnapToken($payload);
            $invoice->snap_token = $snapToken;
            $invoice->save();

            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Detailtempinvoice::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->dispatch('closeCheckoutModal');

            session()->flash('info', 'Transaksi pembayaran tagihan Berhasil');

        }

        public function getDetailtempinvoiceQueryProperty()
        {
            return Detailtempinvoice::orderBy('created_at', 'desc')
            ->with('pesertadidik', 'tagihansiswa')
            ->where('pesertadidik_id', $this->pesertadidikId)
            ;
        }

        public function getDetailtempinvoiceProperty()
        {
            return $this->detailtempinvoiceQuery->paginate($this->paginate);
        }

        public function render()
        {
            return view('livewire.backend.transaksi.index',[
                'jenistagihans'    => Jenistagihan::orderBy('nama', 'asc')->get(),
                'semester'         => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
                'tigkatpendidikan' => Tingkatpendidikan::where('kode', '<>' , 0)->orderBy('tingkat_pendidikan_id', 'asc')->get(),
                'anggotarombels'   => Anggotarombel::where('rombonganbelajar_id', $this->rombonganbelajarId)->get(),
                'rombonganbelajar' => Rombonganbelajar::where('semester_id', $this->semesterId)
                ->where('tingkatpendidikan_id', $this->tigkatpendidikanId)
                ->orderBy('nama', 'asc')->get(),
                'datadetailtempinvoice' => $this->detailtempinvoice,
                'datatagihansiswa'      => $this->tagihansiswa,
                'title'                 => 'Transaksi Pembayaran'
            ]);
        }

    }
