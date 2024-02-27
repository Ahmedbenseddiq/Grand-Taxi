<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\Reservation;use Illuminate\Support\Facades\Auth;


class driverController extends Controller
{
    public function index(){

        $user = auth()->user();
        $driverReservationsCount = $user->reservations()->count();

        $driverCount = User::where('role', 'driver')->count();
        $clientCount = User::where('role', 'client')->count();

        return view('driver.history', [
            'userName' => $user->name,
            'driverReservationsCount' => $driverReservationsCount,
            'driverCount' => $driverCount,
            'clientCount' => $clientCount,
        ]);
    }
    

    public function create()
    {
        $trips = Trip::all();
        $driver = Auth::user();
        // dd($trips);
        return view('driver.createTrip', ['driver' => $driver, 'trips' => $trips]);
    }

    public function store(Request $request){
        
    }

    public function payment(){

    }

    public function availability(){

    }
}
