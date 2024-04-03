<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::create([
            'nama' => 'Honda',
            'alamat' => 'Alamat Manufacturer A',
        ]);

        Manufacturer::create([
            'nama' => 'Ferrari',
            'alamat' => 'Alamat Manufacturer B',
        ]);

        Manufacturer::create([
            'nama' => 'Lamborgini',
            'alamat' => 'Alamat Manufacturer C',
        ]);

        Manufacturer::create([
            'nama' => 'Ford',
            'alamat' => 'Alamat Manufacturer D',
        ]);

        Manufacturer::create([
            'nama' => 'Tesla',
            'alamat' => 'Alamat Manufacturer E',
        ]);
    }
}

