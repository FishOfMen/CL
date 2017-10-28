<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class leaguesController extends Controller
{

    public function index(){
        return view('leagues/leagues');
    }
    
}