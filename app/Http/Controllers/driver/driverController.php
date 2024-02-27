<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use App\Models\DriverTrip;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\Reservation;use Illuminate\Support\Facades\Auth;


class driverController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $driverReservations = Reservation::where('driver_trip_id', $user->id)->get();
    
        $driverReservationsCount = $driverReservations->count();
        $driverCount = User::where('role', 'driver')->count();
        $clientCount = User::where('role', 'client')->count();
    
        return view('driver.history', [
            'userName' => $user->name,
            'driverReservations' => $driverReservations,
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
        // dd($driver);

        return view('driver.createTrip', ['driver' => $driver, 'trips' => $trips]);
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'driver_details_id' => 'required',
            'trip_id' => 'required',
        ]);
        $newdrivertrip = DriverTrip::create($data);
        return redirect()->route('driver.history');
    }

    public function payment(){
        $user = Auth::user(); 
        $driverDetail = $user->driverDetail; 
    
        return view('payment_form', ['selectedPaymentMethod' => $driverDetail->payment]);
    }
    

    public function availability(){

    }
}
