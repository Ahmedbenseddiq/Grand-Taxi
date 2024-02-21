<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class clientController extends Controller
{
    public function index(){
        return view('client.home');
    }

    // public function dashboard(){

    //     if(Auth::check()) {
    //         if(Auth::user()->role === 'admin'){
    //             return redirect()->route('admin.dashboard');
    //         } elseif(Auth::user()->role === 'driver'){
    //             return redirect()->route('driver.dashboard');
    //         }   elseif(Auth::user()->role === 'client'){
    //             return redirect()->route('client.dashboard');
    //         }    
    //     }
        
    //     return view('dashboard');
    // }
}
