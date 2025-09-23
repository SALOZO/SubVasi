<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kecamatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabupatenCache = json_decode(file_get_contents(database_path('seeders/cache_kabupaten_id.json')), true);

        $kecamatan = [
            // Kecamatan Kota Bandung
            ['nama' => 'Arcamanik', 'kabupaten_id' =>  $kabupatenCache['Kota Bandung']],
            ['nama' => 'Astana Anyar', 'kabupaten_id' =>  $kabupatenCache['Kota Bandung']],
            ['nama' => 'Babakan Ciparay', 'kabupaten_id' =>  $kabupatenCache['Kota Bandung']],
            
            // Kecamatan Kabupaten Bandung
            ['nama' => 'Baleendah', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung']],
            ['nama' => 'Bojongsoang', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung']],
            ['nama' => 'Majalaya', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung']],
            
            // Kecamatan Kota Cimahi
            ['nama' => 'Cimahi Selatan', 'kabupaten_id' =>  $kabupatenCache['Kota Cimahi']],
            ['nama' => 'Cimahi Tengah', 'kabupaten_id' =>  $kabupatenCache['Kota Cimahi']],
            ['nama' => 'Cimahi Utara', 'kabupaten_id' =>  $kabupatenCache['Kota Cimahi']],
            
            // Kecamatan Kabupaten Bandung Barat
            ['nama' => 'Lembang', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung Barat']],
            ['nama' => 'Ngamprah', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung Barat']],
            ['nama' => 'Parongpong', 'kabupaten_id' =>  $kabupatenCache['Kabupaten Bandung Barat']],

            // Kecamatan Kabupaten Garut
            ['nama' => 'Garut Kota', 'kabupaten_id' => $kabupatenCache['Kabupaten Garut']],
            ['nama' => 'Tarogong Kidul', 'kabupaten_id' => $kabupatenCache['Kabupaten Garut']],
            ['nama' => 'Tarogong Kaler', 'kabupaten_id' => $kabupatenCache['Kabupaten Garut']],

            

            // ===============================================================================================

            // Kabupaten Banyumas
            ['nama' => 'Purwokerto Utara', 'kabupaten_id' => $kabupatenCache['Kabupaten Banyumas']],

            // Kabupaten Semarang
            ['nama' => 'Ambarawa', 'kabupaten_id' => $kabupatenCache['Kabupaten Semarang']],

            // Kabupaten Cilacap
            ['nama' => 'Cilacap Tengah', 'kabupaten_id' => $kabupatenCache['Kabupaten Cilacap']],

            // Kabupaten Salatiga
            ['nama' => 'Sidorejo', 'kabupaten_id' => $kabupatenCache['Kabupaten Salatiga']],

            // Kabupaten Kudus
            ['nama' => 'Jati', 'kabupaten_id' => $kabupatenCache['Kabupaten Kudus']],
        ];

        $kecamatanIds = [];
        foreach ($kecamatan as $kec) {
            $id = DB::table('kecamatan')->insertGetId([
                'nama' => $kec['nama'],
                'kabupaten_id' => $kec['kabupaten_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $kecamatanIds[$kec['nama']] = $id;
        }

        // Simpan cache ID kecamatan
        file_put_contents(database_path('seeders/cache_kecamatan_id.json'), json_encode($kecamatanIds));
    
    }
}
