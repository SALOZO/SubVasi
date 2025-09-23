<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\desa;
use Database\Seeders\provinsi;
use Database\Seeders\kabupaten;
use Database\Seeders\kecamatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // MANAMBAHKAN DATA
        $this->call([
            provinsi::class,
            kabupaten::class,
            kecamatan::class,
            desa::class,
        ]);

        // MENGHAPUS SEMUA DATA
        // $this->call([
        //     hapus_provinsi::class,
        //     hapus_kabupaten::class,
        //     hapus_kecamatan::class,
        //     hapus_desa::class,
        // ]);
    
    }
}
