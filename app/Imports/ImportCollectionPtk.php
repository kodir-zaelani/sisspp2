<?php

namespace App\Imports;

use App\Models\Ptk;
use App\Models\Bank;
use App\Models\City;
use App\Models\Agama;
use App\Models\Negara;
use App\Models\Jurusan;
use App\Models\Village;
use App\Models\District;
use App\Models\Jenisptk;
use App\Models\Pekerjaan;
use App\Models\Sumbergaji;
use App\Models\Pangkatgolongan;
use App\Models\Jenjangpendidikan;
use App\Models\Lembagapengangkat;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravolt\Indonesia\Models\Province;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ImportCollectionPtk implements
ToCollection,
WithStartRow,
SkipsOnError,
WithValidation,
SkipsOnFailure,
WithHeadingRow,
WithChunkReading
{
    use Importable, SkipsErrors, SkipsFailures;

    protected $sekolahId;
    protected $agama;
    protected $jenjangpendidikan;
    protected $pekerjaan;
    protected $bank;
    protected $negara;
    protected $pangkatgolongan;
    protected $jenisptk;
    protected $village;
    protected $district;
    protected $city;
    protected $province;
    protected $lembagapengangkat;
    protected $sumbergaji;
    protected $jurusan;


    public function __construct($sekolahId )
    {
        $this->sekolahId         = $sekolahId;
        $this->agama             = Agama::select('id', 'nama')->get();
        $this->jenjangpendidikan = Jenjangpendidikan::select('id', 'nama')->get();
        $this->pekerjaan         = Pekerjaan::select('id', 'nama')->get();
        $this->bank              = Bank::select('id', 'nama')->get();
        $this->negara            = Negara::select('id', 'nama')->get();
        $this->pangkatgolongan   = Pangkatgolongan::select('id','nama')->get();
        $this->jenisptk          = Jenisptk::select('id','jenis_ptk')->get();
        $this->village           = Village::select('code','name')->get();
        $this->district          = District::select('code','name')->get();
        $this->city              = City::select('code','name')->get();
        $this->province          = Province::select('code','name')->get();
        $this->lembagapengangkat = Lembagapengangkat::select('id','nama')->get();
        $this->sumbergaji        = Sumbergaji::select('id','nama')->get();
        $this->jurusan           = Jurusan::select('id','nama_jurusan')->get();
    }

    public function headingRow(): int
    {
        return 5;
    }

    public function startRow(): int
    {
        return 6;
    }

     public function rules(): array
    {
        return [
            '*.nip' => ['unique:ptks,nip'],
            '*.nik' => ['unique:ptks,nik'],
            '*.nuptk' => ['unique:ptks,nuptk'],
        ];
    }

    public function chunkSize(): int
    {
        return 1000;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        DB::beginTransaction();

        try {
        foreach ($rows as $row)
            {

            $agama             = $this->agama->where('nama', $row['agama'])->first();
            $jenjangpendidikan = $this->jenjangpendidikan->where('nama', $row['pendidikanterakhir'])->first();
            $pangkatgolongan   = $this->pangkatgolongan->where('nama', $row['pangkatgol'])->first();
            $jenisptk          = $this->jenisptk->where('jenis_ptk', $row['jenisptk'])->first();
            $pekerjaan         = $this->pekerjaan->where('nama', $row['pekerjaansuamiistri'])->first();
            $bank              = $this->bank->where('nama', $row['namabank'])->first();
            $village           = $this->village->where('name', $row['kelurahan'])->first();
            $district          = $this->district->where('name', $row['kecamatan'])->first();
            $city              = $this->city->where('name', $row['kabupatenkota'])->first();
            $province          = $this->province->where('name', $row['provinsi'])->first();
            $lembagapengangkat = $this->lembagapengangkat->where('nama', $row['lembagapengangkat'])->first();
            $sumbergaji        = $this->sumbergaji->where('nama', $row['sumbergaji'])->first();
            $jurusan           = $this->jurusan->where('nama_jurusan', $row['jurusanprodi'])->first();

            Ptk::create([
                'sekolah_id'               => $this->sekolahId,
                'gelar_depan'              => $row['gelardepan'],
                'nama'                     => $row['nama'],
                'gelar_belakang'           => $row['gelarbelakang'],
                'jenis_kelamin'            => $row['jk'],
                'tempat_lahir'             => $row['tempatlahir'],
                'tanggal_lahir'            => $row['tanggallahir'],
                'nik'                      => $row['nik'],
                'nip'                      => $row['nip'],
                'pangkatgolongan_id'       => $pangkatgolongan['id'] ?? null,
                'nuptk'                    => $row['nuptk'],
                'niy_nigk'                 => $row['niynigk'],
                'jenisptk_id'              => $jenisptk['id'] ?? null,
                'agama_id'                 => $agama['id'] ?? null,
                'alamat_jalan'             => $row['alamat'],
                'rt'                       => $row['rt'],
                'rw'                       => $row['rw'],
                'nama_dusun'               => $row['dusun'],
                'village_code'             => $village['code'] ?? null,
                'district_code'            => $district['code'] ?? null,
                'city_code'                => $city['code'] ?? null,
                'province_code'            => $province['code'] ?? null,
                'kode_pos'                 => $row['kodepos'],
                'no_telepon_rumah'         => $row['nomortelepon'],
                'no_hp'                    => $row['nomorhp'],
                'email'                    => $row['email'],
                'sk_cpns'                  => $row['skcpns'],
                'tgl_cpns'                 => $row['tanggalcpns'],
                'sk_pengangkatan'          => $row['skawalpengangkatan'],
                'tgl_pengangkatan'         => $row['tmtawalpengangkatan'],
                'lembagapengangkat_id'     => $lembagapengangkat['id'] ?? null,
                'sumbergaji_id'            => $sumbergaji['id'] ?? null,
                'nama_ibu_kandung'         => $row['namaibukandung'],
                'status_perkawinan'        => $row['statusperkawinan'],
                'nama_suami_istri'         => $row['namasuamiistri'],
                'nip_suami_istri'          => $row['nipsuamiistri'],
                'pekerjaan_suami_istri_id' => $pekerjaan['id'] ?? null,
                'tmt_pns'                  => $row['tmtpns'],
                'lisensi_kepala_sekolah'   => $row['lisensikepalasekolah'],
                'npwp'                     => $row['npwp'],
                'penugasan'                => $row['penugasan'],
                'jenjangpendidikan_id'     => $jenjangpendidikan['id'] ?? null,
                'jurusan_id'               => $jurusan['id'] ?? null,
                'kode_sertifikasi'         => $row['kodesertifikasi'],
                'no_sertifikasi_guru'      => $row['nosertifikasi'],
                'bank_id'                  => $bank['id'] ?? null,
                'rek_bank'                 => $row['nomorrekening'],
                'nama_kcp'                 => $row['cabang'],
                'rek_atas_nama'            => $row['pemilikrekening'],
                'karpeg'                   => $row['karpeg'],
                'karpas'                   => $row['karpas'],
                'tugas_tambahan'           => $row['tugastambahan'],
                'kewarganegaraan'          => $row['kewarganegaraan'],

            ]);
        }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Anda bisa menangani error di sini, atau melempar exception lagi
            throw $e;
        }
    }
}