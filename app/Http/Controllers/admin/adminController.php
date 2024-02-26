<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;

class adminController extends Controller
{

    public function index()
    {
        $driverCount = User::where('role', 'driver')->count();
        $clientCount = User::where('role', 'client')->count();
        $reservationCount = Reservation::count(); 
    
        $adminUsers = $this->getAdminUsers();

        if (request()->is('admin/driver')) {
            $users = User::where('role', 'driver')->get();
            return view('admin.driver', ['users' => $users, 'driverCount' => $driverCount, 'clientCount' => $clientCount, 'reservationCount' => $reservationCount]);
        } elseif (request()->is('admin/client')) {
            $users = User::where('role', 'client')->get();
            return view('admin.client', ['users' => $users, 'clientCount' => $clientCount, 'driverCount' => $driverCount, 'reservationCount' => $reservationCount]);
        } elseif (request()->is('admin/reservation')) {
            // Logic for reservations view
            return view('admin.reservation', ['driverCount' => $driverCount, 'clientCount' => $clientCount, 'reservationCount' => $reservationCount]);
        }
    }
    
    public function getAdminUsers()
    {
        return User::where('role', 'admin')->get();
    }
    
    public function create (){
        return view('admin.createUser');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $newUser = User::create($data);
        // dd($newUser);
        return redirect(route('admin.driver'));
    }

    public function edit(User $user){
        // dd($user);
        return view('admin.editUser', ['user' => $user]);
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        $user->update($data);
        // dd($user);
        return redirect(route('admin.driver'))->with('success','User updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        // dd($user);
        return redirect(route('admin.driver'))->with('success','User deleted successfully');
    }
}
