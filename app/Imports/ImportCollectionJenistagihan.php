<?php

namespace App\Imports;

use App\Models\Jenistagihan;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ImportCollectionJenistagihan implements
ToCollection,
WithStartRow,
SkipsOnError,
SkipsOnFailure,
WithHeadingRow,
WithChunkReading
{

    use Importable, SkipsErrors, SkipsFailures;

    protected $sekolahId;
    protected $tahunajaranId;
    protected $tanggalmulai;
    protected $tanggalberakhir;

    public function __construct(
        $sekolahId,
        $tahunajaranId,
        $tanggalmulai,
        $tanggalberakhir,
        )
        {
            $this->sekolahId       = $sekolahId;
            $this->tahunajaranId   = $tahunajaranId;
            $this->tanggalmulai    = $tanggalmulai;
            $this->tanggalberakhir = $tanggalberakhir;
        }

        public function headingRow(): int
        {
            return 4;
        }

        public function startRow(): int
        {
            return 5;
        }

        public function chunkSize(): int
        {
            return 1000;
        }

        /**
        * @param array $row
        *
        * @return \Illuminate\Database\Eloquent\Collection|null
        */
        public function collection(Collection $rows)
        {

            // Gunakan transaksi database untuk memastikan konsistensi data
            DB::beginTransaction();

            try {
                foreach ($rows as $row) {
                    $jenistagihan = Jenistagihan::firstOrCreate([
                        'sekolah_id'      => $this->sekolahId,
                        'tahunajaran_id'  => $this->tahunajaranId,
                        'nama'            => $row['nama'],
                        'periodik'        => $row['periodik'],
                        'jenis_periodik'  => $row['jenisperiodik'],
                        'perlu_tagihan'   => $row['perlutagihan'],
                        'besaran'         => $row['besaran'],
                        'tanggal_mulai'   => $this->tanggalmulai,
                        'tanggal_selesai' => $this->tanggalberakhir,

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
