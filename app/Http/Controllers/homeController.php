<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;

class homeController extends Controller
{
    public function home() {
        
        $users = User::all();
        
        return view('welcome', compact('users'));
    }
    
    public function login() {
        return view('login');
    }
}