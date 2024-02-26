<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_trips')->insert([
            [
                'driver_details_id' => 1,
                'trip_id' => 5,
            ],
            [
                'driver_details_id' => 2,
                'trip_id' => 6,
            ],
            [
                'driver_details_id' => 3,
                'trip_id' => 4,
            ],
            [
                'driver_details_id' => 4,
                'trip_id' => 2,
            ],
        ]);
    }
}
