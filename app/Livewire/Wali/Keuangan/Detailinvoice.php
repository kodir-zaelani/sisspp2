<?php

namespace App\Livewire\Wali\Keuangan;

use App\Models\Invoice;
use Livewire\Component;
use Illuminate\Http\Request;

class Detailinvoice extends Component
{

    public $segment;

    public function mount(Request $request, Invoice $invoice)
    {
        $this->segment = $request->segment(3);
    }

    public function render()
    {
        return view('livewire.wali.keuangan.detailinvoice', [
            'invoice' => Invoice::where('id', $this->segment)->first(),
            'title' => 'Invoice Detail'
        ]);
    }
}