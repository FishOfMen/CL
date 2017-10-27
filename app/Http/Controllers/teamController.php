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

      $data = Team::with([
        'user',
        'league'
      ])->get()->toArray();

      // foreach ($teams as $team) {
      //     dump($team->team_name, $team->user->first_name, $team->user->last_name, $team->league->name);
      // }


        // $teams = Team::select('teams.*','users.first_name', 'users.last_name', 'leagues.name')
        //     ->join('users', 'teams.owner_id', '=', 'users.id')
        //     ->join('leagues', 'teams.league_id', '=', 'leagues.id')
        //     ->get();

        // dd($data);

        return view('teams\teams')->with('data', $data);
    }

    public function create(){
        return view('teams\create-team');
    }
}
