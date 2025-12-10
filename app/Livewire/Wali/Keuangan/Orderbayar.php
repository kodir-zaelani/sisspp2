<?php

namespace App\Livewire\Wali\Keuangan;

use Midtrans\Snap;
use App\Models\Invoice;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Tagihansiswa;
use App\Models\Detailinvoice;
use App\Models\Walimuridsekolah;
use App\Models\Detailtempinvoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Orderbayar extends Component
{
    public $pesertadidikId;
    public $selectedItem;
    public $action;

    public $upsemesterId;
    public $uprombonganbelajarId;
    public $uppesertadidikId;
    public $note;

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;
        if ($action == 'bayartagihan') {
            $this->simpantagihan($itemId);
        } elseif ($action == 'delete') {
            $this->dispatch('openDeleteModal');
        }
    }

    public function bataltransaksi()
    {
        $this->dispatch('openDeleteModalAll');
    }

    // Delete Single Record
    public function delete()
    {

        $tempinvoice = Detailtempinvoice::where('id', $this->selectedItem)->first();

        $tagihansiswa = Tagihansiswa::where('id', $tempinvoice->tagihansiswa_id)->first();

        $tagihansiswa->update(['statusbayar' => 'Belum']);

        Detailtempinvoice::destroy($this->selectedItem);

        $this->dispatch('closeDeleteModal');

        session()->flash('danger', 'Delete Item transaksi tagihan Successfully');

    }

    public function deleteRecords()
    {
        $tempinvoices = Detailtempinvoice::where('id', $this->pesertadidikId)->get();


        $tagihansiswa = Tagihansiswa::whereKey('id', $tempinvoices->tagihansiswa_id)->update(['statusbayar' => 'Belum']);

        //  foreach ($tempinvoices as $item) {

        //      $tagihansiswa = Tagihansiswa::where('id', $item->tagihansiswa_id)->get();
        //      $tagihansiswa->update(['statusbayar' => 'Belum']);
        // }

        Detailtempinvoice::where('pesertadidik_id', $this->pesertadidikId)->delete();

        $this->dispatch('closeDeleteModalAll');

        session()->flash('danger', 'Semua data order pembayran tagihan berhasil dihapus');
    }

    public function checkout()
    {
        $this->dispatch('openCheckoutModal');
    }

    public function prosescheckout()
    {
        $user = Auth::user()->id;
        $wali = Walimuridsekolah::where('user_id', $user)->first();
        $this->uppesertadidikId  = $wali->pesertadidik_id;

        $datadetailtempinvoiceup = Detailtempinvoice::orderBy('created_at', 'asc')
        ->with('pesertadidik', 'tagihansiswa')
        ->where('pesertadidik_id', $this->pesertadidikId)->first();

        $this->upsemesterId = $datadetailtempinvoiceup->tagihansiswa->semester_id;
        $this->uprombonganbelajarId = $datadetailtempinvoiceup->tagihansiswa->rombonganbelajar_id;
        // $this->uppesertadidikId = $datadetailtempinvoiceup->tagihansiswa->rombonganbelajar_id;

        // Set midtrans configuration
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');



        $data = [
            'invoice'             => 'INV-'.Str::upper(Str::random(9)),
            'semester_id'         => $this->upsemesterId,
            'rombonganbelajar_id' => $this->uprombonganbelajarId,
            'pesertadidik_id'     => $this->uppesertadidikId,
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
             $bayarid =  $invoice->id;

            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            Detailtempinvoice::where('pesertadidik_id', $this->pesertadidikId)->delete();

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            $this->dispatch('closeCheckoutModal');

            // session()->flash('warning', 'Checkout Transaksi pembayaran tagihan Berhasil');

            return Redirect::route('wali.bayar',$bayarid)->with('warning', 'Checkout Transaksi pembayaran tagihan Berhasil');

            // dd($bayar);


        }

        public function render()
        {
            $user = Auth::user()->id;
            $wali = Walimuridsekolah::where('user_id', $user)->first();
            $this->pesertadidikId  = $wali->pesertadidik_id;

            $datadetailtempinvoice = Detailtempinvoice::orderBy('created_at', 'asc')
            ->with('pesertadidik', 'tagihansiswa')
            ->where('pesertadidik_id', $this->pesertadidikId)->get();

            return view('livewire.wali.keuangan.orderbayar',[
                'datadetailtempinvoice' => $datadetailtempinvoice
            ]);
        }
    }
