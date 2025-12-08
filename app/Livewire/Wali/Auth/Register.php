<?php

namespace App\Livewire\Wali\Auth;

use App\Models\Sekolah;
use Livewire\Component;
use App\Models\Tahunajaran;
use App\Models\Pesertadidik;

class Register extends Component
{
    public $tahunajaranId = NULL;
    public $sekolahId = NULL;
    public $pesertadidikId = NULL;
    public $pilihan = NULL;
    public $namalengkap;
    public $namaorangtua_wali;

    public function updatedSekolahId()
    {
        $this->pesertadidikId    = NULL;
        $this->tahunajaranId      = NULL;
        $this->pilihan           = NULL;
        $this->namaorangtua_wali = NULL;
    }

    public function updatedPesertadidikId()
    {
        $this->pilihan           = NULL;
        $this->namaorangtua_wali = NULL;
    }
    public function updatedtahunajaranId()
    {
        $this->pilihan           = NULL;
        $this->namaorangtua_wali = NULL;
    }

    public function updatedPilihan()
    {
        $this->namalengkap = Pesertadidik::where('sekolah_id', $this->sekolahId)
        ->where('tahunajaran_id', $this->tahunajaranId)
        ->where('id', $this->pesertadidikId)
        ->first();

        if ($this->pilihan == 'ayah') {
            $this->namaorangtua_wali = $this->namalengkap->nama_ayah;
        } elseif ($this->pilihan == 'ibu') {
            $this->namaorangtua_wali = $this->namalengkap->nama_ibu;
        } elseif ($this->pilihan == 'wali') {
            $this->namaorangtua_wali = $this->namalengkap->nama_wali;
        }
        // dd($this->namaorangtua_wali);

    }

    public function render()
    {
        return view('livewire.wali.auth.register',[
            'sekolah'      => Sekolah::orderBy('nama', 'asc')->get(),
            'tahunajarans' => Tahunajaran::orderBy('nama', 'desc')->get(),
            'pesertadidik' => Pesertadidik::where('sekolah_id', $this->sekolahId)
            ->where('tahunajaran_id', $this->tahunajaranId)
            ->orderBy('nama', 'asc')
            ->get()
        ]);
    }
}
