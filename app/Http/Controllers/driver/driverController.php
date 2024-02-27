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
        $userName = $user->name;
    
        $driverCount = User::where('role', 'driver')->count();
        $clientCount = User::where('role', 'client')->count();
        $reservationCount = Reservation::count(); 
    
        return view('driver.history ',  ['userName' => $userName, 'driverCount' => $driverCount, 'clientCount' => $clientCount, 'reservationCount' => $reservationCount]);
    }
    

    public function edit(){

        return view('driver.history');
    }
}
