<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;

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
    

    public function create(){
        
    }

    public function store(Request $request){
        
    }

    public function payment(){

    }

    public function availability(){
        
    }
}
