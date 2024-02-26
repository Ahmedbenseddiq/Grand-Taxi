<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverDetail; // Import the DriverDetail model

class DriverDetailController extends Controller
{
    public function index()
    {
        $driverDetails = DriverDetail::with('user')->get();
        
        return view('client.create', compact('driverDetails'));
    }
}
