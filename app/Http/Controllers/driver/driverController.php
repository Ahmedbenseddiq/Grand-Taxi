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

    public function payment() {
        $user = Auth::user(); 
        $driverDetail = $user->driverDetails; 
        // dd($driverDetail);
        return view('driver.payment', ['driverDetails' => $driverDetail]);
    }
    
    public function paymentupdate(Request $request) {
        // dd($request);
        $user = Auth::user();
        $driverDetail = $user->driverDetail;
    
        if ($driverDetail) {
            $data = $request->validate([
                'payment_method' => 'required|in:cash,card,paypal',
            ]);
    
            $driverDetail->update([
                'payment' => $request->input('payment_method')
            ]);
    
            return redirect()->route('driver.history')->with('success','Payment method updated successfully');
        } else {
            return redirect()->route('driver.history')->with('error','Driver details not found');
        }
    }
    
    public function availability() {
        $user = Auth::user(); 
        $driverDetail = $user->driverDetails; 
        // dd($driverDetail);
        return view('driver.availability', ['driverDetails' => $driverDetail]);
    }
    
    public function updateAvailability(Request $request) {
        // dd($request);
        $user = Auth::user();
        $driverDetail = $user->driverDetails;
    
        if ($driverDetail) {
            $data = $request->validate([
                'status' => 'required|in:available,unavailable,busy',
            ]);
    
            $driverDetail->update([
                'status' => $request->input('status')
            ]);
    
            return redirect()->route('driver.history')->with('success','Availability updated successfully');
        } else {
            return redirect()->route('driver.history')->with('error','Driver details not found');
        }
    }
}
