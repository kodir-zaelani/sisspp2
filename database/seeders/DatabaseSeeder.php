<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\BankSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AgamaSeeder;
use Database\Seeders\NegaraSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\JenisPtkSeeder;
use Database\Seeders\RefHobbySeeder;
use Database\Seeders\RoleUserSeeder;
use Database\Seeders\KurikulumSeeder;
use Database\Seeders\RefDiklatSeeder;
use Database\Seeders\RefSaranaSeeder;
use Database\Seeders\AkreditasiSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\PenghargaanSeeder;
use Database\Seeders\RefBeasiswaSeeder;
use Database\Seeders\RefCitacitaSeeder;
use Database\Seeders\RefPrestasiSeeder;
use Database\Seeders\RefSemesterSeeder;
use Database\Seeders\TahunajaranSeeder;
use Database\Seeders\JenisLembagaSeeder;
use Database\Seeders\RefHapusBukuSeeder;
use Database\Seeders\RefPekerjaanSeeder;
use Database\Seeders\RefPrasaranaSeeder;
use Database\Seeders\RefSumberAirSeeder;
use Database\Seeders\RefTunjanganSeeder;
use Database\Seeders\MataPelajaranSeeder;
use Database\Seeders\RefStatusAnakSeeder;
use Database\Seeders\RefSumberDanaSeeder;
use Database\Seeders\RefSumberGajiSeeder;
use Database\Seeders\RoleUseradminSeeder;
use Database\Seeders\JenisPengaduanSeeder;
use Database\Seeders\RefBidangStudiSeeder;
use Database\Seeders\RefBidangUsahaSeeder;
use Database\Seeders\RefJeniskeluarSeeder;
use Database\Seeders\RefJenisRombelSeeder;
use Database\Seeders\RefPendaftaranSeeder;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Database\Seeders\RefJenisBantuanSeeder;
use Database\Seeders\RefJenisTinggalSeeder;
use Database\Seeders\BentukPendidikanSeeder;
use Database\Seeders\RefAksesInternetSeeder;
use Database\Seeders\RefGelarAkademikSeeder;
use Database\Seeders\RefJenisBukuAlatSeeder;
use Database\Seeders\RefKesejahteraanSeeder;
use Database\Seeders\RefSumberListrikSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Database\Seeders\JenjangPendidikanSeeder;
use Database\Seeders\LembagaakreditasiSeeder;
use Database\Seeders\RefAlasanlayakPIPSeeder;
use Database\Seeders\RefSertifikasiISOSeeder;
use Database\Seeders\TingkatPendidikanSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;
use Database\Seeders\RefEkstrakurikulerSeeder;
use Database\Seeders\RefKebutuhanKhususSeeder;
use Database\Seeders\RefPangkatGolonganSeeder;
use Database\Seeders\RefTingkatPrestasiSeeder;
use Database\Seeders\RefAlatTransportasiSeeder;
use Database\Seeders\RefJabatanFungsionalSeeder;
use Database\Seeders\RefLembagaPengangkatSeeder;
use Database\Seeders\RefStatuskepegawaianSeeder;
use Database\Seeders\RefStatusKepemilikanSeeder;
use Database\Seeders\RefTingkatPenghargaanSeeder;
use Database\Seeders\RefJabatanTugasPegawaiSeeder;
use Database\Seeders\RefPenghasilanOrangtuaSeeder;
use Database\Seeders\RefWaktuPenyelenggaraanSeeder;
use Database\Seeders\Mata_pelajaran_kurikulumSeeder;
use Database\Seeders\RefStatusKepemilikanSarprasSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  $this->call([
        //     ProvincesSeeder::class,
        //     CitiesSeeder::class,
        //     DistrictsSeeder::class,
        //     VillagesSeeder::class,
        // ]);

        // $this->call(SettingSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(PermissionSeeder::class);
        $this->call(RoleUserSeeder::class);
        // $this->call(RoleUseradminSeeder::class);
        // $this->call(AgamaSeeder::class);
        // $this->call(JenisPengaduanSeeder::class); // belum ada
        // $this->call(AkreditasiSeeder::class);
        // $this->call(RefAlasanlayakPIPSeeder::class);  // Sudah di seeder
        // $this->call(BentukPendidikanSeeder::class);
        // $this->call(RefAksesInternetSeeder::class);
        // $this->call(JenjangPendidikanSeeder::class);
        // $this->call(TingkatPendidikanSeeder::class);
        // belum dicek

        // $this->call(RefStatusKepemilikanSeeder::class);
        // $this->call(NegaraSeeder::class);
        // $this->call(BankSeeder::class);
        // $this->call(RefKebutuhanKhususSeeder::class);
        // $this->call(RefJenisRombelSeeder::class);
        // $this->call(JenisPtkSeeder::class);
        // $this->call(TahunajaranSeeder::class);
        // $this->call(RefSemesterSeeder::class);
        // $this->call(RefAlatTransportasiSeeder::class);
        // $this->call(RefBidangStudiSeeder::class);
        // $this->call(RefEkstrakurikulerSeeder::class);
        // $this->call(RefCitacitaSeeder::class);
        // $this->call(RefHobbySeeder::class);
        // $this->call(RefJeniskeluarSeeder::class);
        // $this->call(RefPendaftaranSeeder::class);
        // $this->call(RefPrestasiSeeder::class);
        // $this->call(RefGelarAkademikSeeder::class);
        // $this->call(RefJabatanFungsionalSeeder::class);
        // $this->call(RefJabatanTugasPegawaiSeeder::class);

        // $this->call(RefJenisTinggalSeeder::class);
        // $this->call(RefPekerjaanSeeder::class);
        // $this->call(RefPangkatGolonganSeeder::class);
        // $this->call(RefPenghasilanOrangtuaSeeder::class);
        // $this->call(RefStatuskepegawaianSeeder::class);
        // $this->call(RefStatusAnakSeeder::class);
        // $this->call(RefSumberGajiSeeder::class);
        // $this->call(RefSumberAirSeeder::class);
        // $this->call(RefSumberListrikSeeder::class);
        // $this->call(RefSumberDanaSeeder::class);

        // $this->call(RefBidangUsahaSeeder::class);
        // $this->call(RefDiklatSeeder::class);
        // $this->call(RefJenisBukuAlatSeeder::class);
        // $this->call(RefHapusBukuSeeder::class);
        // $this->call(RefJenisBantuanSeeder::class);
        // $this->call(RefKesejahteraanSeeder::class);
        // $this->call(PenghargaanSeeder::class);
        // $this->call(RefPrasaranaSeeder::class);
        // $this->call(RefSaranaSeeder::class);
        // $this->call(RefTunjanganSeeder::class);
        // $this->call(LembagaakreditasiSeeder::class);
        // $this->call(RefLembagaPengangkatSeeder::class);
        // $this->call(RefTingkatPenghargaanSeeder::class);
        // $this->call(RefTingkatPrestasiSeeder::class);
        // $this->call(RefWaktuPenyelenggaraanSeeder::class);
        // $this->call(RefSertifikasiISOSeeder::class);
        // $this->call(RefStatusKepemilikanSarprasSeeder::class);
        // $this->call(JenisLembagaSeeder::class);
        // $this->call(JurusanSeeder::class);
        // $this->call(KurikulumSeeder::class);
        // $this->call(MataPelajaranSeeder::class);
        // $this->call(RefBeasiswaSeeder::class);
        // $this->call(StatuskeaktifanSeeder::class);

        // $this->call(Mata_pelajaran_kurikulumSeeder::class);
    }
}
