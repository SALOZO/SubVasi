<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kabupaten extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiCache = json_decode(file_get_contents(database_path('seeders/cache_provinsi_id.json')), true);
        $provinsijabarId = $provinsiCache['Jawa Barat'];
        $provinsijatengId = $provinsiCache['Jawa Tengah'];
        

        $kabupaten = [

            // JABAR
            ['nama' => 'Kota Bandung', 'provinsi_id' => $provinsijabarId],
            ['nama' => 'Kabupaten Bandung', 'provinsi_id' => $provinsijabarId],
            ['nama' => 'Kota Cimahi', 'provinsi_id' => $provinsijabarId],
            ['nama' => 'Kabupaten Bandung Barat', 'provinsi_id' => $provinsijabarId],
            ['nama' => 'Kabupaten Garut', 'provinsi_id' => $provinsijabarId],

            // JATENG
            ['nama' => 'Kabupaten Banyumas', 'provinsi_id' => $provinsijatengId],
            ['nama' => 'Kabupaten Semarang', 'provinsi_id' => $provinsijatengId],
            ['nama' => 'Kabupaten Cilacap', 'provinsi_id' => $provinsijatengId],
            ['nama' => 'Kabupaten Salatiga', 'provinsi_id' => $provinsijatengId],
            ['nama' => 'Kabupaten Kudus', 'provinsi_id' => $provinsijatengId],
        ];

        $kabupatenIds = [];

        foreach ($kabupaten as $kab) {
            $id = DB::table('kabupaten')->insertGetId([
                'nama' => $kab['nama'], 
                'provinsi_id' => $kab['provinsi_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            $kabupatenIds[$kab['nama']] = $id;
        }

        file_put_contents(database_path('seeders/cache_kabupaten_id.json'), json_encode($kabupatenIds));

    }
}
