<?php

namespace App\Http\Controllers\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class driverController extends Controller
{
    public function index(){
        return view('driver.dashboard');
    }
}
