<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    
    public function index(){
            if (request()->is('admin/driver')) {
                $users = User::where('role', 'driver')->get();
                return view('admin.driver', ['users' => $users]);
            } elseif (request()->is('admin/client')) {
                $users = User::where('role', 'client')->get();
                return view('admin.client', ['users' => $users]);
            } elseif (request()->is('admin/reservation')) {
                // Logic for reservations view
                return view('admin.reservation');
            } 
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
