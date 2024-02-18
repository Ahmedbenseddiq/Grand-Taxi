<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.driver');
        return view('admin.clients');
        return view('admin.reservation');
    }

    public function create (){

        return view('admin.createUser');
    }
}
