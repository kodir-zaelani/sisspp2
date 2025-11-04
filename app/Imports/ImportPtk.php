<?php

namespace App\Imports;

use App\Models\Ptk;
use App\Models\Bank;
use App\Models\Agama;
use App\Models\Jurusan;
use App\Models\Sekolah;
use App\Models\Jenisptk;
use App\Models\Pekerjaan;
use App\Models\Sumbergaji;
use App\Models\Kebutuhankhusus;
use App\Models\Pangkatgolongan;
use App\Models\Bentukpendidikan;
use App\Models\Jenjangpendidikan;
use App\Models\Lembagapengangkat;
use App\Models\Statuskepemilikan;
use Illuminate\Support\Collection;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;


class ImportPtk implements ToCollection, WithStartRow
{
    public function startRow(): int
    {
        return 6;
    }

    public static function getProvinceCode(string $province)
    {
        return Province::where('name', $row[11])->first();

    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        HeadingRowFormatter::default('none');
        $jk = '';

        foreach ($rows as $row)
            {

            $sekolah           = Sekolah::where('nama', $row[0])->first();
            $pangkatgolongan   = Pangkatgolongan::where('nama', $row[9])->first();
            $jenisptk          = Jenisptk::where('jenis_ptk', $row[12])->first();
            $agama             = Agama::where('nama', $row[13])->first();
            $village           = Village::where('name', $row[18])->first();
            $district          = District::where('name', $row[19])->first();
            $city              = City::where('name', $row[20])->first();
            $province          = Province::where('name', $row[21])->first();
            $lembagapengangkat = Lembagapengangkat::where('nama', $row[30])->first();
            $sumbergaji        = Sumbergaji::where('nama', $row[31])->first();
            $pekerjaan         = Pekerjaan::where('nama', $row[36])->first();
            $jenjangpendidikan = Jenjangpendidikan::where('nama', $row[41])->first();
            $jurusan           = Jurusan::where('nama_jurusan', $row[42])->first();
            $namabank          = Bank::where('nama', $row[45])->first();



            if ($row[4] == 'L') {
                $jk = 1;
            } elseif ($row[3] == 'P') {
                $jk = 2;
            };

            Ptk::create([
                'sekolah_id'               => $sekolah['id'] ?? null,
                'gelar_depan'              => $row[1],
                'nama'                     => $row[2],
                'gelar_belakang'           => $row[3],
                'jenis_kelamin'            => $jk,
                'tempat_lahir'             => $row[5],
                'tanggal_lahir'            => $row[6],
                'nik'                      => $row[7],
                'nip'                      => $row[8],
                'pangkatgolongan_id'       => $pangkatgolongan['id'] ?? null,
                'nuptk'                    => $row[10],
                'niy_nigk'                 => $row[11],
                'jenisptk_id'              => $jenisptk['id'] ?? null,
                'agama_id'                 => $agama['id'] ?? null,
                'alamat_jalan'             => $row[14],
                'rt'                       => $row[15],
                'rw'                       => $row[16],
                'nama_dusun'               => $row[17],
                'village_code'             => $village['code'] ?? null,
                'district_code'            => $district['code'] ?? null,
                'city_code'                => $city['code'] ?? null,
                'province_code'            => $province['code'] ?? null,
                'kode_pos'                 => $row[22],
                'no_telepon_rumah'         => $row[23],
                'no_hp'                    => $row[24],
                'email'                    => $row[25],
                'sk_cpns'                  => $row[26],
                'tgl_cpns'                 => $row[27],
                'sk_pengangkatan'          => $row[28],
                'tgl_pengangkatan'         => $row[29],
                'lembagapengangkat_id'     => $lembagapengangkat['id'] ?? null,
                'sumbergaji_id'            => $sumbergaji['id'] ?? null,
                'nama_ibu_kandung'         => $row[32],
                'status_perkawinan'        => $row[33],
                'nama_suami_istri'         => $row[34],
                'nip_suami_istri'          => $row[35],
                'pekerjaan_suami_istri_id' => $pekerjaan['id'] ?? null,
                'tmt_pns'                  => $row[37],
                'lisensi_kepala_sekolah'   => $row[38],
                'npwp'                     => $row[39],
                'penugasan'                => $row[40],
                'jenjangpendidikan_id'     => $jenjangpendidikan['id'] ?? null,
                'jurusan_id'               => $jurusan['id'] ?? null,
                'kode_sertifikasi'         => $row[43],
                'No_sertifikasi_guru'      => $row[44],
                'tugas_tambahan'           => $row[51],
                'bank_id'                  => $namabank['id'] ?? null,
                'rek_bank'                 => $row[46],
                'nama_kcp'                 => $row[47],
                'rek_atas_nama'            => $row[48],
                'karpeg'                   => $row[49],
                'karpas'                   => $row[50],
                'kewarganegaraan'          => $row[29],

            ]);
        }
    }
}