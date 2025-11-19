<?php

namespace App\Imports;

use App\Models\Pesertadidik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ImportModelPesertadidik implements
ToModel,
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

    public function __construct($sekolahId, $tahunajaranId, $semesterId, $tanggalditerima, $tingkatpendidikanId, $jenispendaftaranId )
    {
        $this->sekolahId           = $sekolahId;
        $this->tahunajaranId       = $tahunajaranId;
        $this->semesterId          = $semesterId;
        $this->tanggalditerima     = $tanggalditerima;
        $this->tingkatpendidikanId = $tingkatpendidikanId;
        $this->jenispendaftaranId  = $jenispendaftaranId;
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
    public function model(array $row)
    {
        return new Pesertadidik([
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
            // 'agama_id'                  => $agama['id'] ?? null,
            'alamat_jalan'              => $row['alamat'],
            'rt'                        => $row['rt'],
            'rw'                        => $row['rw'],
            'nama_dusun'                => $row['dusun'],
            // // 'village_code'              => $village['code'] ?? null,
            // // 'district_code'             => $district['code'] ?? null,
            'kode_pos'                  => $row['pos'],
            // // 'jenistinggal_id'           => $row[16],
            // // 'alattransportasi_id'       => $row[17],
            'no_telepon_rumah'          => $row['telepon'],
            'no_telepon_seluler'        => $row['hp'],
            'email'                     => $row['email'],
            'skhun'                     => $row['skhun'],
            'penerima_kps'              => $row['penerimakps'],
            'no_kps'                    => $row['nokps'],
            'nama_ayah'                 => $row['namaayah'],
            'tahun_lahir_ayah'          => $row['tahunlahirayah'],
            // // 'jenjangpendidikan_ayah_id' => $sumbergaji['id'] ?? null,
            // // 'pekerjaan_ayah_id'         => $sumbergaji['id'] ?? null,
            // // 'penghasilan_ayah_id'       => $sumbergaji['id'] ?? null,
            'nik_ayah'                  => $row['nikayah'],
            'nama_ibu'                  => $row['namaibu'],
            'tahun_lahir_ibu'           => $row['tahunlahiribu'],
            // // 'jenjangpendidikan_ibu_id'  => $sumbergaji['id'] ?? null,
            // // 'pekerjaan_ibu_id'          => $sumbergaji['id'] ?? null,
            // // 'penghasilan_ibu_id'        => $sumbergaji['id'] ?? null,
            'nik_ibu'                   => $row['nikibu'],
            'nama_wali'                 => $row['namawali'],
            'tahun_lahir_wali'          => $row['tahunlahirwali'],
            // // 'jenjangpendidikan_wali_id' => $sumbergaji['id'] ?? null,
            // // 'pekerjaan_wali_id'         => $sumbergaji['id'] ?? null,
            // // 'penghasilan_wali_id'       => $sumbergaji['id'] ?? null,
            'nik_wali'                  => $row['nikwali'],// aman
            'no_peserta_ujian'          => $row['nopesertaujiannasional'],
            'no_seri_ijazah'            => $row['noseriijazah'],
            'penerima_kip'              => $row['penerimakip'],
            'no_kip'                    => $row['nokip'],
            'nama_kip'                  => $row['namakip'],
            'no_kks'                    => $row['nokks'],
            'reg_akta_lahir'            => $row['noregistrasiaktalahir'],
            // // 'bank_id'                   => $namabank['id'] ?? null,
            'rek_bank'                  => $row['norekeningbank'],
            'rek_atas_nama'             => $row['rekeningatasnama'],
            'layak_pip'                 => $row['layakpip'],
            // // 'alasanlayakpip_id'         => $sumbergaji['id'] ?? null,
            // // 'kebutuhankhusus_id'        => $sumbergaji['id'] ?? null,
            // // 'asal_sekolah_id'           => $sumbergaji['id'] ?? null,
            'anak_keberapa'             => $row['anakkeberapa'],
            'lintang'                   => $row['lintang'],
            'bujur'                     => $row['bujur'],
            'no_kk'                     => $row['nokk'],
        ]);
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