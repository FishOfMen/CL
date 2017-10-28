<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class gamesController extends Controller
{

    public function sports(){
        return view('sports/sports');
    }
    
}