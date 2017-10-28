<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    public function home(Request $request) {

        $users = User::select('id', 'first_name', 'last_name', 'username')->get();

//        $user = $request->session()->get('User');

        return view('welcome')->with('users', $users);
    }

    public function login() {
        return view('login');
    }

    public function signIn(Request $request){

        $user =  User::where('username', $request->username)
                      ->where('password', $request->password)
                      ->select('id')->first();


        if ($user != null){

            $user_info = User::where('id', $user->id)
                ->get()->first();

            $user_name = $user_info->first_name. ' ' .$user_info->last_name;

            Session::flash('success', "Welcome $user_name");

            Session::put('User', $user->id);

            return redirect('/');

        } else {

            Session::flash('error', 'Could not sign in');

            return redirect()->back();

        }
    }

    public function logout(){

        Session::flush();
        Session::put('User', 'Guest');

        return redirect('/');

    }

    public function weather(){
        return view('weather/index');
    }
}
