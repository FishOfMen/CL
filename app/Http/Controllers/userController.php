<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function index(){
        // DB::table('users')
        //     where->('id', '=', 'id')

        // return view('users/');
    }

    public function createUser(){
        return view('users/create-user');
    }

    public function store(Request $request){

        $username_exists = User::where('username', '=', $request->username)->first();
        $email_exists = User::where('email', '=', $request->email)->first();

        if ($username_exists == null && $email_exists == null){
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

            Session::flash('success', 'User created successfully. Try logging in!');

            return redirect('/login');
        } else {
            if ($username_exists != null){
                Session::flash('error', 'Username is already in use');

                return redirect()->back();
            }
            else {
                if ($email_exists != null){
                    Session::flash('error', 'Email is already in use');

                    return redirect()->back();
                } else {

                    Session::flash('error', 'Sorry an unknown error occurred. Please try again');

                    return redirect()->back();
                }
            }
        }


    }

    public function profile($id){

        $user_info = User::where('id', '=', $id)->first();

      return view('users/profile')->with('user_info', $user_info);
    }
}
