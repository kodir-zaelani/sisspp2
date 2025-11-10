<?php

namespace App\Imports;

use App\Models\Bank;
use App\Models\Negara;
use App\Models\Sekolah;
use App\Models\Yayasan;
use App\Models\Kebutuhankhusus;
use App\Models\Bentukpendidikan;
use App\Models\Statuskepemilikan;
use Illuminate\Support\Collection;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class Importsatuanpendidikan implements ToCollection, WithStartRow
{
     use Importable, SkipsErrors;
    public function startRow(): int
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
        HeadingRowFormatter::default('none');
        $status_sekolah = '';

        foreach ($rows as $row)
            {
            $province          = Province::where('name', $row[11])->first();
            $city              = City::where('name', $row[10])->first();
            $district          = District::where('name', $row[9])->first();
            $village           = Village::where('name', $row[8])->first();
            $negara            = Negara::where('nama', $row[12])->first();
            $bentukpendidikan  = Bentukpendidikan::where('nama', $row[2])->first();
            $statuskepemilikan = Statuskepemilikan::where('nama', $row[15])->first();
            $namabank          = Bank::where('nama', $row[20])->first();
            $kebutuhankhusus   = Kebutuhankhusus::where('kebutuhan_khusus', $row[18])->first();
            $yayasanid           = Yayasan::where('nama', $row[34])->first();

            if ($row[3] == 'Swasta') {
                $status_sekolah = 2;
            } elseif ($row[3] == 'Negeri') {
                $status_sekolah = 1;
            };

            if ($row[23] == 'Tidak') {
                $mbs = 2;
            } else {
                $mbs = 1;
            };


            if ($status_sekolah != null) {
                if ($mbs != null) {
                    Sekolah::create([

                        'nama'                      => $row[0],
                        'npsn'                      => $row[1],
                        'sk_pendirian_sekolah'      => $row[13],
                        'tanggal_pendirian_sekolah' => $row[14],
                        'sk_izin_operasional'       => $row[16],
                        'tanggal_izin_operasional'  => $row[17],
                        'alamat'                    => $row[4],
                        'rt'                        => $row[5],
                        'rw'                        => $row[6],
                        'kode_pos'                  => $row[7],
                        'no_rekening'               => $row[19],
                        'cabang_kcp_unit'           => $row[21],
                        'rekening_atas_nama'        => $row[22],
                        'npwp'                      => $row[27],
                        'nama_npwp'                 => $row[26],
                        'no_telp'                   => $row[28],
                        'no_fax'                    => $row[29],
                        'email'                     => $row[30],
                        'website'                   => $row[31],
                        'lintang'                   => $row[32],
                        'bujur'                     => $row[33],
                        'yayasan_id'                => $yayasanid['id'] ?? null,
                        'status_sekolah'            => $status_sekolah,
                        'mbs'                       => $mbs,
                        'negara_id'                 => $negara['id'] ?? null,
                        'bentukpendidikan_id'       => $bentukpendidikan['id'],
                        'statuskepemilikan_id'      => $statuskepemilikan['id'],
                        'bank_id'                   => $namabank['id'],
                        'nama_bank'                 => $row[20],
                        // 'kebutuhankhusus_id'        => $kebutuhankhusus['id'],
                        'province_code' => $province['code'],
                        'city_code'     => $city['code'],
                        'district_code' => $district['code'],
                        'village_code'  => $village['code'],
                    ]);
                }
            }
        }
    }
}