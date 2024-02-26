<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_details')->insert([
            [
                'driver_id' => 2,
                'lisence_plate' => 'ABC123',
                'vehicle_type' => 'SUV',
                'status' => 'available',
                'payment' => 'cash',
            ],
            [
                'driver_id' => 3,
                'lisence_plate' => 'XYZ456',
                'vehicle_type' => 'Sedan',
                'status' => 'available',
                'payment' => 'card',
            ],
            [
                'driver_id' => 4,
                'lisence_plate' => 'DEF789',
                'vehicle_type' => 'Hatchback',
                'status' => 'available',
                'payment' => 'cash',
            ],
            [
                'driver_id' => 5,
                'lisence_plate' => 'GHI012',
                'vehicle_type' => 'Truck',
                'status' => 'available',
                'payment' => 'cash',
            ],
        ]);
    }
}
