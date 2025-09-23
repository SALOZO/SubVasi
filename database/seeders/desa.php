<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class desa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatanCache = json_decode(file_get_contents(database_path('seeders/cache_kecamatan_id.json')), true);

        $desa = [

            // Desa di Kecamatan Arcamanik, Kota Bandung
            ['nama' => 'Arcamanik', 'kecamatan_id' => $kecamatanCache['Arcamanik']],
            ['nama' => 'Cisaranten Endah', 'kecamatan_id' => $kecamatanCache['Arcamanik']],
            ['nama' => 'Kebon Gedang', 'kecamatan_id' => $kecamatanCache['Arcamanik']],

            // Kelurahan di Kecamatan Astana Anyar, Kota Bandung
            ['nama' => 'Astana Anyar', 'kecamatan_id' => $kecamatanCache['Astana Anyar']],
            ['nama' => 'Ciateul', 'kecamatan_id' => $kecamatanCache['Astana Anyar']],
            ['nama' => 'Sukagalih', 'kecamatan_id' => $kecamatanCache['Astana Anyar']],

            // Kelurahan di Kecamatan Babakan Ciparay, Kota Bandung
            ['nama' => 'Babakan Ciparay', 'kecamatan_id' => $kecamatanCache['Babakan Ciparay']],
            ['nama' => 'Maleer', 'kecamatan_id' => $kecamatanCache['Babakan Ciparay']],
            ['nama' => 'Sukamiskin', 'kecamatan_id' => $kecamatanCache['Babakan Ciparay']],

            // Desa di Kecamatan Baleendah, Kabupaten Bandung
            ['nama' => 'Andir', 'kecamatan_id' => $kecamatanCache['Baleendah']],
            ['nama' => 'Baleendah', 'kecamatan_id' => $kecamatanCache['Baleendah']],
            ['nama' => 'Jelekong', 'kecamatan_id' => $kecamatanCache['Baleendah']],

            // Desa di Kecamatan Bojongsoang, Kabupaten Bandung
            ['nama' => 'Bojongsoang', 'kecamatan_id' => $kecamatanCache['Bojongsoang']],
            ['nama' => 'Cingcin', 'kecamatan_id' => $kecamatanCache['Bojongsoang']],
            ['nama' => 'Rancabolang', 'kecamatan_id' => $kecamatanCache['Bojongsoang']],

            // MAJALAYA
            ['nama' => 'Cenang', 'kecamatan_id' => $kecamatanCache['Majalaya']],
            ['nama' => 'Hegarmanah', 'kecamatan_id' => $kecamatanCache['Majalaya']],

            
            // Kelurahan di Kecamatan Cimahi Selatan, Kota Cimahi
            ['nama' => 'Cibeber', 'kecamatan_id' => $kecamatanCache['Cimahi Selatan']],
            ['nama' => 'Cibeureum', 'kecamatan_id' => $kecamatanCache['Cimahi Selatan']],
            ['nama' => 'Leuwigajah', 'kecamatan_id' => $kecamatanCache['Cimahi Selatan']],

            // Kelurahan di Kecamatan Cimahi Tengah, Kota Cimahi
            ['nama' => 'Cimahi', 'kecamatan_id' => $kecamatanCache['Cimahi Tengah']],
            ['nama' => 'Baros', 'kecamatan_id' => $kecamatanCache['Cimahi Tengah']],
            ['nama' => 'Cibabat', 'kecamatan_id' => $kecamatanCache['Cimahi Tengah']],

            // Kelurahan di Kecamatan Cimahi Utara, Kota Cimahi
            ['nama' => 'Cimahi Utara', 'kecamatan_id' => $kecamatanCache['Cimahi Utara']],
            ['nama' => 'Melong', 'kecamatan_id' => $kecamatanCache['Cimahi Utara']],
            ['nama' => 'Pasirkaliki', 'kecamatan_id' => $kecamatanCache['Cimahi Utara']],
            
            // Desa di Kecamatan Lembang, Kabupaten Bandung Barat
            ['nama' => 'Cibodas', 'kecamatan_id' => $kecamatanCache['Lembang']],
            ['nama' => 'Cikidang', 'kecamatan_id' => $kecamatanCache['Lembang']],
            ['nama' => 'Cikole', 'kecamatan_id' => $kecamatanCache['Lembang']],


            
            // ====================================================================================

            // JATENG

            //===================================================================================== 

            // Desa di Kecamatan Purwokerto Utara
            ['nama' => 'Grendeng', 'kecamatan_id' => $kecamatanCache['Purwokerto Utara']],
            ['nama' => 'Bancarkembar', 'kecamatan_id' => $kecamatanCache['Purwokerto Utara']],

            // Desa di Kecamatan Ambarawa
            ['nama' => 'Tambakboyo', 'kecamatan_id' => $kecamatanCache['Ambarawa']],
            ['nama' => 'Kupang', 'kecamatan_id' => $kecamatanCache['Ambarawa']],

            // Desa di Kecamatan Cilacap Tengah
            ['nama' => 'Sidanegara', 'kecamatan_id' => $kecamatanCache['Cilacap Tengah']],
            ['nama' => 'Donan', 'kecamatan_id' => $kecamatanCache['Cilacap Tengah']],

            // Desa di Kecamatan Sidorejo
            ['nama' => 'Sidorejo Lor', 'kecamatan_id' => $kecamatanCache['Sidorejo']],
            ['nama' => 'Sidorejo Kidul', 'kecamatan_id' => $kecamatanCache['Sidorejo']],

            // Desa di Kecamatan Jati
            ['nama' => 'Jetis Kapuan', 'kecamatan_id' => $kecamatanCache['Jati']],
            ['nama' => 'Loram Wetan', 'kecamatan_id' => $kecamatanCache['Jati']],
        ];

        foreach ($desa as $des) {
            DB::table('desa')->insert([
                'nama' => $des['nama'],
                'kecamatan_id' => $des['kecamatan_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
