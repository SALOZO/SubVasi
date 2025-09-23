<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class hapus_kecamatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kecamatan')->delete();

        DB::statement('ALTER TABLE kecamatan AUTO_INCREMENT = 1');
    }
}
