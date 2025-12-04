<?php

namespace App\Livewire\Backend\Anggotarombel;

use Livewire\Component;
use App\Models\Semester;
use App\Models\Tahunajaran;
use Livewire\Attributes\On;
use App\Models\Jenistagihan;
use App\Models\Pesertadidik;
use App\Models\Tagihansiswa;
use App\Models\Anggotarombel;
use App\Models\Jenispendaftaran;
use App\Models\Rombonganbelajar;

class Createmasal extends Component
{
     public $tahunjaranId;
    public $semesterId;
    public $rombonganbelajarId;
    public $pesertadidikId;
    public $pesertadidiks;
    public $jenispendaftaranId;
    public $jenistagihanId;

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
        return view('livewire.backend.anggotarombel.createmasal',[
            'tahunajaran'      => Tahunajaran::orderBy('nama', 'desc')->get(),
            'semester'         => Semester::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'desc')->get(),
            'rombonganbelajar' => Rombonganbelajar::where('semester_id', $this->semesterId)->orderBy('nama', 'asc')->get(),
            'jenispendaftaran' => Jenispendaftaran::orderBy('jenis_pendaftaran_id', 'asc')->where('daftar_rombel', 1)->get(),
            'pesertadidik'     => Pesertadidik::where('tahunajaran_id', $this->tahunjaranId)->orderBy('nama', 'asc')->get(),
            'title'            => 'Tambah Anggota Rombel'
        ]);
    }

}