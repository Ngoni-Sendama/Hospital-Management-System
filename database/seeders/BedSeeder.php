<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beds = [];
        $totalWards = 40; // Assuming you have 40 wards (Ward A02 to Ward A20, and Ward B01 to Ward B20)

        foreach (range(1, $totalWards) as $wardId) {
            // Generate at least 15 beds per ward, with random extra beds
            $bedCount = rand(15, 20);

            foreach (range(1, $bedCount) as $i) {
                $beds[] = [
                    'bed_number' => 'Bed' . str_pad($i, 3, '0', STR_PAD_LEFT),  // Format Bed001, Bed002, ...
                    'ward_id' => $wardId,   // Assign a random ward between 1 and 40
                    'is_occupied' => false, // By default, not occupied
                    'patient_id' => null,   // Nullable field, initially no patient assigned
                ];
            }
        }

        // Insert the bed data into the database
        Bed::insert($beds);
    }
}
