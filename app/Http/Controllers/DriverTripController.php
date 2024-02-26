<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverTrip; // Import the DriverTrip model

class DriverTripController extends Controller
{
    public function index()
    {
        $driverTrips = DriverTrip::all();
        
        return view('driver_trips.index', compact('driverTrips'));
    }
}
