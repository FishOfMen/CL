<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;

class userController extends Controller
{
    public function index(){
        DB::table('users')
            where->('id', '=', 'id')
        
        return view('users/user/{{ id }}');
    }
    
    public function createUser(){
        return view('users/create-user');
    }
    
    public function store(Request $request){
        
        DB::table('users')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'birthday' => $request->birthday,
            'password' => $request->password,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip  
        ]);
        
        return \Redirect::to('/');
    }
}