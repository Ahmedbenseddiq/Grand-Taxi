<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->insert([
            [
                'pickup_city_id' => 1,
                'destination_city_id' => 2,
            ],
            [
                'pickup_city_id' => 2,
                'destination_city_id' => 3,
            ],
            [
                'pickup_city_id' => 3,
                'destination_city_id' => 1,
            ],
            [
                'pickup_city_id' =>  4,
                'destination_city_id' => 2,
            ],
            [
                'pickup_city_id' => 5,
                'destination_city_id' => 3,
            ],
            [
                'pickup_city_id' => 8,
                'destination_city_id' => 1,
            ],
        ]);
    }
}