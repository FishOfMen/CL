<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Team;

class teamController extends Controller
{
    public function index(){
        $teams = DB::table('teams')
            ->join('users', 'teams.owner_id', '=', 'users.id')
            ->join('leagues', 'teams.league_id', '=', 'leagues.id')
            ->select('teams.*','users.first_name', 'users.last_name', 'leagues.name')
            ->get();
        
//        return $teams;
        
        return view('teams/team', compact('teams'));
    }
    
    public function create(){
        return view('teams/create-team');
    }
}