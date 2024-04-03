<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cars;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cars::create([
            'nama' => 'Xenia',
            'jenis' => 'MPV',
            'harga' => 200000000,
            'tanggal_pembuatan' => '2022-01-01',
        ]);

        Cars::create([
            'nama' => 'Avanza',
            'jenis' => 'MPV',
            'harga' => 210000000,
            'tanggal_pembuatan' => '2022-02-01',
        ]);

        Cars::create([
            'nama' => 'Ford',
            'jenis' => 'Sedan',
            'harga' => 300000000,
            'tanggal_pembuatan' => '2022-03-01',
        ]);

        Cars::create([
            'nama' => 'Ferrari F8',
            'jenis' => 'Supercar',
            'harga' => 3000000000,
            'tanggal_pembuatan' => '2022-04-01',
        ]);

        Cars::create([
            'nama' => 'Ford Mustang',
            'jenis' => 'Muscle Car',
            'harga' => 400000000,
            'tanggal_pembuatan' => '2022-05-01',
        ]);

        Cars::create([
            'nama' => 'Lamborghini Huracan',
            'jenis' => 'Supercar',
            'harga' => 3500000000,
            'tanggal_pembuatan' => '2022-06-01',
        ]);

        Cars::create([
            'nama' => 'Tesla',
            'jenis' => 'Electric Car',
            'harga' => 500000000,
            'tanggal_pembuatan' => '2022-07-01',
        ]);

    }
}
