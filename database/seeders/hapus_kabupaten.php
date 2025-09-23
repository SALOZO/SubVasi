<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class hapus_kabupaten extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabupaten')->delete();

        DB::statement('ALTER TABLE kabupaten AUTO_INCREMENT = 1');
    }
}
