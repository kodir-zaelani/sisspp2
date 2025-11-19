<?php

namespace App\Imports;

use App\Models\Bank;
use App\Models\Agama;
use App\Models\Negara;
use App\Models\Pekerjaan;
use App\Models\Jenistinggal;
use App\Models\Pesertadidik;
use App\Models\Pdlongitudinal;
use App\Models\Penghasilanortu;
use App\Models\Alattransportasi;
use App\Models\Jenjangpendidikan;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Validators\Failure;
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

class ImportCollectionPesertadidik implements
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
    protected $tahunajaranId;
    protected $semesterId;
    protected $tanggalditerima;
    protected $tingkatpendidikanId;
    protected $jenispendaftaranId;
    protected $agama;
    protected $jenistinggal;
    protected $alattransportasi;
    protected $jenjangpendidikan;
    protected $pekerjaan;
    protected $penghasilanortu;
    protected $bank;
    protected $negara;

    public function __construct($sekolahId, $tahunajaranId, $semesterId, $tanggalditerima, $tingkatpendidikanId, $jenispendaftaranId )
    {
        $this->sekolahId           = $sekolahId;
        $this->tahunajaranId       = $tahunajaranId;
        $this->semesterId          = $semesterId;
        $this->tanggalditerima     = $tanggalditerima;
        $this->tingkatpendidikanId = $tingkatpendidikanId;
        $this->jenispendaftaranId  = $jenispendaftaranId;
        $this->agama               = Agama::select('id', 'nama')->get();
        $this->jenistinggal        = Jenistinggal::select('id', 'nama')->get();
        $this->alattransportasi    = Alattransportasi::select('id', 'nama')->get();
        $this->jenjangpendidikan   = Jenjangpendidikan::select('id', 'nama')->get();
        $this->pekerjaan           = Pekerjaan::select('id', 'nama')->get();
        $this->penghasilanortu     = Penghasilanortu::select('id', 'nama')->get();
        $this->bank                = Bank::select('id', 'nama')->get();
        $this->negara              = Negara::select('id', 'nama')->get();
    }

    public function startRow(): int
    {
        return 4;
    }

    public function headingRow(): int
    {
        return 3;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        // Gunakan transaksi database untuk memastikan konsistensi data
        DB::beginTransaction();

        try {
            foreach ($rows as $row) {

                $agama                 = $this->agama->where('nama', $row['agama'])->first();
                $jenistinggal          = $this->jenistinggal->where('nama', $row['jenistinggal'])->first();
                $alattransportasi      = $this->alattransportasi->where('nama', $row['alattransportasi'])->first();
                $jenjangpendidikanayah = $this->jenjangpendidikan->where('nama', $row['jenjangpendidikanayah'])->first();
                $jenjangpendidikanibu  = $this->jenjangpendidikan->where('nama', $row['jenjangpendidikanibu'])->first();
                $jenjangpendidikanwali = $this->jenjangpendidikan->where('nama', $row['jenjangpendidikanwali'])->first();
                $pekerjaanayah         = $this->pekerjaan->where('nama', $row['pekerjaanayah'])->first();
                $pekerjaanibu          = $this->pekerjaan->where('nama', $row['pekerjaanibu'])->first();
                $pekerjaanwali         = $this->pekerjaan->where('nama', $row['pekerjaanwali'])->first();
                $penghasilanayah       = $this->penghasilanortu->where('nama', $row['penghasilanayah'])->first();
                $penghasilanibu        = $this->penghasilanortu->where('nama', $row['penghasilanibu'])->first();
                $penghasilanwali       = $this->penghasilanortu->where('nama', $row['penghasilanwali'])->first();
                $bank                  = $this->bank->where('nama', $row['bank'])->first();
                $negara                = $this->negara->where('nama', $row['negara'])->first();

                // 1. Simpan data ke tabel pertama (misalnya Pesertadidik)
                $pesertadidik = Pesertadidik::firstOrCreate([

                    'sekolah_id'                => $this->sekolahId,
                    'tahunajaran_id'            => $this->tahunajaranId,
                    'semester_id'               => $this->semesterId,
                    'tanggal_diterima'          => $this->tanggalditerima,
                    'tingkatpendidikan_id'      => $this->tingkatpendidikanId,
                    'jenispendaftaran_id'       => $this->jenispendaftaranId,
                    'nama'                      => $row['nama'],
                    'nipd'                      => $row['nipd'],
                    'jenis_kelamin'             => $row['jk'],
                    'nisn'                      => $row['nisn'],
                    'tempat_lahir'              => $row['tempatlahir'],
                    'tanggal_lahir'             => $row['tanggallahir'],
                    'nik'                       => $row['nik'],
                    'agama_id'                  => $agama['id'] ?? null,
                    'alamat_jalan'              => $row['alamat'],
                    'rt'                        => $row['rt'],
                    'rw'                        => $row['rw'],
                    'nama_dusun'                => $row['dusun'],
                    'kode_pos'                  => $row['pos'],
                    'jenistinggal_id'           => $jenistinggal['id'] ?? null,
                    'alattransportasi_id'       => $alattransportasi['id'] ?? null,
                    'no_telepon_rumah'          => $row['telepon'],
                    'no_telepon_seluler'        => $row['hp'],
                    'email'                     => $row['email'],
                    'skhun'                     => $row['skhun'],
                    'penerima_kps'              => $row['penerimakps'],
                    'no_kps'                    => $row['nokps'],
                    'nama_ayah'                 => $row['namaayah'],
                    'tahun_lahir_ayah'          => $row['tahunlahirayah'],
                    'jenjangpendidikan_ayah_id' => $jenjangpendidikanayah['id'] ?? null,
                    'pekerjaan_ayah_id'         => $pekerjaanayah['id'] ?? null,
                    'penghasilan_ayah_id'       => $penghasilanayah['id'] ?? null,
                    'nik_ayah'                  => $row['nikayah'],
                    'nama_ibu'                  => $row['namaibu'],
                    'tahun_lahir_ibu'           => $row['tahunlahiribu'],
                    'jenjangpendidikan_ibu_id'  => $jenjangpendidikanibu['id'] ?? null,
                    'pekerjaan_ibu_id'          => $pekerjaanibu['id'] ?? null,
                    'penghasilan_ibu_id'        => $penghasilanibu['id'] ?? null,
                    'nik_ibu'                   => $row['nikibu'],
                    'nama_wali'                 => $row['namawali'],
                    'tahun_lahir_wali'          => $row['tahunlahirwali'],
                    'jenjangpendidikan_wali_id' => $jenjangpendidikanwali['id'] ?? null,
                    'pekerjaan_wali_id'         => $pekerjaanwali['id'] ?? null,
                    'penghasilan_wali_id'       => $penghasilanwali['id'] ?? null,
                    'nik_wali'                  => $row['nikwali'],
                    'no_peserta_ujian'          => $row['nopesertaujiannasional'],
                    'no_seri_ijazah'            => $row['noseriijazah'],
                    'penerima_kip'              => $row['penerimakip'],
                    'no_kip'                    => $row['nokip'],
                    'nama_kip'                  => $row['namakip'],
                    'no_kks'                    => $row['nokks'],
                    'reg_akta_lahir'            => $row['noregistrasiaktalahir'],
                    'bank_id'                   => $bank['id'] ?? null,
                    'rek_bank'                  => $row['norekeningbank'],
                    'rek_atas_nama'             => $row['rekeningatasnama'],
                    'layak_pip'                 => $row['layakpip'],
                    'anak_keberapa'             => $row['anakkeberapa'],
                    'lintang'                   => $row['lintang'],
                    'bujur'                     => $row['bujur'],
                    'no_kk'                     => $row['nokk'],
                    'negara_id'                 => $negara['id'] ?? null,
                    // // 'village_code'              => $village['code'] ?? null,
                    // // 'district_code'             => $district['code'] ?? null,
                    // // 'alasanlayakpip_id'         => $sumbergaji['id'] ?? null,
                    // // 'kebutuhankhusus_id'        => $sumbergaji['id'] ?? null,
                    // // 'asal_sekolah_id'           => $sumbergaji['id'] ?? null,
                ]);

                // 2. Simpan data ke tabel kedua (misalnya Pdlongitudinal) dengan foreign key
                // Pdlongitudinal::create([
                // 'pesertadidik_id'           => $pesertadidik->id,
                $pesertadidik->pdlongitudinal()->create([
                    'semester_id'               => $this->semesterId,
                    'berat_badan'               => $row['beratbadan'],
                    'tinggi_badan'              => $row['tinggibadan'],
                    'jarak_rumah_ke_sekolah_km' => $row['jarakrumahkesekolahkm'],
                    'lingkar_kepala'            => $row['lingkarkepala'],
                    'jumlah_saudara_kandung'    => $row['jumlahsaudarakandung'],
                    // 'waktu_tempuh_ke_sekolah'   => $row['waktu_tempuh_ke_sekolah'],
                    // 'menit_tempuh_ke_sekolah'   => $row['menit_tempuh_ke_sekolah'],
                    // 'jarak_rumah_ke_sekolah'    => $row['jarakrumahkesekolah'],
                ]);

            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Anda bisa menangani error di sini, atau melempar exception lagi
            throw $e;
        }

    }

    public function rules(): array
    {
        return [
            // '*.nipd' => ['unique:pesertadidiks,nipd'],
            '*.nisn' => ['unique:pesertadidiks,nisn'],
            '*.nik' => ['unique:pesertadidiks,nik'],
        ];
    }

    public function chunkSize(): int
    {
        return 1000;
    }

}