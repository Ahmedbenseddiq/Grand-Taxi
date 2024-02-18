<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function index(){
        return view('admin.driver');
        return view('admin.clients');
        return view('admin.reservation');
    }

    public function showDrivers()
    {
        $drivers = User::where('role', 'driver')->get();
        return view('admin.driver', ['drivers' => $drivers]);
    }

    public function showClients()
    {
        $clients = User::where('role', 'client')->get();
        return view('admin.clients', ['clients' => $clients]);
    }

    public function create (){
        return view('admin.createUser');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'confirm_password' => 'required|same:password', 
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $newUser = User::create($data);
        // dd($newUser);
        return redirect(route('admin.driver'));
    }
}
