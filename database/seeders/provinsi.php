<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Provinsi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi = [
            'Jawa Barat',
            'Jawa Tengah',
        ];

        $provinsiIds = [];

        foreach ($provinsi as $nama) {
            $id = DB::table('provinsi')->insertGetId([
                'nama' => $nama,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $provinsiIds[$nama] = $id;
        }

        file_put_contents(database_path('seeders/cache_provinsi_id.json'),json_encode($provinsiIds));
    }
}
