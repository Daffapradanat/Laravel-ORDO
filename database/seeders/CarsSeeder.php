<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('cars')->insert([
            'nama' => 'Innova',
            'jenis' => 'MPV',
            'harga' => 250000000,
            'tanggal_pembuatan' => '2023-01-15',
        ]);
    }
}
