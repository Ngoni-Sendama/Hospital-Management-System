<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wards = [];

        // Generate Ward A02 to A20
        for ($i = 2; $i <= 20; $i++) {
            $wards[] = [
                'name' => 'Ward A' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'capacity' => rand(20, 25),
                'current_occupancy' => null,
            ];
        }

        // Generate Ward B01 to B20
        for ($i = 1; $i <= 20; $i++) {
            $wards[] = [
                'name' => 'Ward B' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'capacity' => rand(20, 25),
                'current_occupancy' => null,
            ];
        }

        // Insert the ward data into the database
        Ward::insert($wards);
    }
}
